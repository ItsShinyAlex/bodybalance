<?php
/**
 * Auto Update notification Class File.
 * Versión modificada para que pueda obtener actualizaciones de la plantilla padre.
 * @author flippercode & Esbrillante
 * @package Updates
 * @version 1.0.0
 */

if ( ! class_exists( 'WTHP_Auto_Theme_Update' ) ) {

	/**
	 * Auto Update notification Class.
	 * @author flippercode
	 * @package Posts
	 * @version 1.0.0
	 */
	class WTHP_Auto_Theme_Update
	{
		/**
		 * Plugin's current version
		 * @var string
		 */
		public $wsq_current_version = '1.0.0';

		/**
		 * Plugin's remote path
		 * @var string
		 */
		public $wsq_remote_path = 'https://esbrillante.mx';

		/**
		 * Plugin's Slug
		 * @var string
		 */
		public $wsq_slug;

		/**
		 * Initialize a new instance of the Auto-Update class.
		 */
		function __construct() {

			// Check for plugin updates.
			add_filter( 'pre_set_site_transient_update_themes', array( $this, 'check_updates' ),10,1 );

		}

		/**
		 * Add our plugin to the filter transient.
		 * @param  object $transient Transient Object.
		 * @return object            Transient Object.
		 */
		public function check_updates($transient) {

			if ( empty( $transient->checked ) ) {
				return $transient;
			}

			// Obtiene los datos de la plantilla hijo

			$current_theme = wp_get_theme();

			// Fix que obtiene el nombre del directorio del template padre
			$folder_name = $current_theme->get( 'Template' );

           

			$this->wsq_slug = trim( $folder_name );

			// Obtiene la versión del template padre
			$style_parent_theme = wp_get_theme(get_template());

			$this->wsq_current_version =  $style_parent_theme->get( 'Version' );

			// Check and Get remote version.
			$response = wp_remote_post( $this->wsq_remote_path.'/wunpupdates', array( 'body' => array( 'action' => 'version', 'plugin' => $this->wsq_slug ) ) );

			if ( ! is_wp_error( $response ) || wp_remote_retrieve_response_code( $response ) === 200 ) {
				$new_updates = unserialize( $response['body'] );
				$new_updates = $this->append_auth_parameter($new_updates);

				// If update is available, set the transient.
				if ( version_compare( $this->wsq_current_version, $new_updates->new_version, '<' ) ) {
					$package_url = $new_updates->package;
					$parts = parse_url($package_url);
					parse_str($parts['query'], $pkg_parameters);
					if(isset($pkg_parameters['source']) and $pkg_parameters['source'] == 'envato') {
						$item_id = $pkg_parameters['item'];
						$token = apply_filters('envato_customer_token',false);
						if( $token !== false ) {
							$token = array( "token" => $token );
							$download_url = $this->wupp_download($item_id, $token);
							if( $download_url !== false ) {
							$new_updates->package = $download_url;
							$new_updates->download_link = $download_url;
							} 
						} 
					}
				
					$transient->response[ $this->wsq_slug ] = (array) $new_updates;
				}
			}
			return $transient;
		}

		function append_auth_parameter($info) {
		$username = apply_filters($this->wsq_slug.'_username',get_option($this->wsq_slug.'_username'));
		$purchase_key = apply_filters($this->wsq_slug.'_key',get_option($this->wsq_slug.'_key'));
		
		
		if( !empty($username) and !empty($purchase_key) ) {
			$auth_url = add_query_arg( array(
				'euname' => $username,
				'epkey' => $purchase_key,
			), $info->package );
		} else {
			$auth_url = $info->package; 
		}

		$auth_url = apply_filters('wupp_auth_url',$auth_url, $this->wsq_slug);
		$info->download_link = $auth_url;
		$info->package = $auth_url;
		return $info;
	}

	function wupp_download( $id, $args = array() ) {
			if ( empty( $id ) ) {
				return false;
			}

			$url = 'https://api.envato.com/v3/market/buyer/download?item_id=' . $id . '&shorten_url=true';
			$response = $this->wupp_request( $url, $args );

			if ( is_wp_error( $response ) || empty( $response ) || ! empty( $response['error'] ) ) {
				return false;
			}

			if ( ! empty( $response['wordpress_theme'] ) ) {
				return $response['wordpress_theme'];
			}

			if ( ! empty( $response['wordpress_plugin'] ) ) {
				return $response['wordpress_plugin'];
			}

			return false;
		}

	function wupp_request( $url, $args = array() ) {

			$token = $args['token'];
			unset($args['token']);
			$defaults = array(
				'headers' => array(
					'Authorization' => 'Bearer ' . $token,
				),
				'timeout' => 20,
			);
			$args = wp_parse_args( $args, $defaults );

			$token = trim( str_replace( 'Bearer', '', $args['headers']['Authorization'] ) );
			if ( empty( $token ) ) {
				return new WP_Error( 'api_error', __( 'An API token is required.' ) );
			}

			$response = wp_remote_get( esc_url_raw( $url ), $args );
			$response_code    = wp_remote_retrieve_response_code( $response );
			$response_message = wp_remote_retrieve_response_message( $response );

			if ( 200 !== $response_code && ! empty( $response_message ) ) {
				return new WP_Error( $response_code, $response_message );
			} elseif ( 200 !== $response_code ) {
				return new WP_Error( $response_code, __( 'An unknown API error occurred.' ) );
			} else {
				$return = json_decode( wp_remote_retrieve_body( $response ), true );
				if ( null === $return ) {
					return new WP_Error( 'api_error', __( 'An unknown API error occurred.' ) );
				}
				return $return;
			}
		}

	}

}

new WTHP_Auto_Theme_Update();

