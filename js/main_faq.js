var _createClass = function () {function defineProperties(target, props) {for (var i = 0; i < props.length; i++) {var descriptor = props[i];descriptor.enumerable = descriptor.enumerable || false;descriptor.configurable = true;if ("value" in descriptor) descriptor.writable = true;Object.defineProperty(target, descriptor.key, descriptor);}}return function (Constructor, protoProps, staticProps) {if (protoProps) defineProperties(Constructor.prototype, protoProps);if (staticProps) defineProperties(Constructor, staticProps);return Constructor;};}();function _classCallCheck(instance, Constructor) {if (!(instance instanceof Constructor)) {throw new TypeError("Cannot call a class as a function");}} /**
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        >>>>>>>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        Wanna include in your project?
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        More documentation on github:
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        https://github.com/cant89/gianni-accordion-js
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        >>>>>>>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        **/

var gianniAccordion = function () {
  return function () {_createClass(_class, [{ key: 'transitionendEventName', value: function transitionendEventName()

      {
        var i,
        el = document.createElement('div'),
        transitions = {
          'transition': 'transitionend',
          'OTransition': 'otransitionend',
          'MozTransition': 'transitionend',
          'WebkitTransition': 'webkitTransitionEnd' };


        for (i in transitions) {
          if (transitions.hasOwnProperty(i) && el.style[i] !== undefined) {
            return transitions[i];
          }
        }
      } }, { key: 'expand', value: function expand(

      el) {
        function resetHeight(ev) {var _this = this;
          if (ev.target != el.content) return;
          el.content.removeEventListener(this.transitionendevent, bindEvent);

          if (!el.isOpen) return;

          requestAnimationFrame(function () {
            el.content.style.transition = '0';
            el.content.style.height = 'auto';

            requestAnimationFrame(function () {
              el.content.style.height = null;
              el.content.style.transition = null;

              _this.fire("elementOpened", el);
            });
          });
        }

        var bindEvent = resetHeight.bind(this);
        el.content.addEventListener(this.transitionendevent, bindEvent);

        el.isOpen = true;
        el.content.style.height = el.content.scrollHeight + "px";
      } }, { key: 'collapse', value: function collapse(

      el) {

        function endTransition(ev) {
          if (ev.target != el.content) return;
          el.content.removeEventListener(this.transitionendevent, bindEvent);

          if (el.isOpen) return;

          this.fire("elementClosed", el);
        }

        var bindEvent = endTransition.bind(this);
        el.content.addEventListener(this.transitionendevent, bindEvent);

        el.isOpen = false;

        requestAnimationFrame(function () {
          el.content.style.transition = '0';
          el.content.style.height = el.content.scrollHeight + "px";

          requestAnimationFrame(function () {
            el.content.style.transition = null;
            el.content.style.height = 0;
          });
        });
      } }, { key: 'open', value: function open(

      el) {
        el.selected = true;
        this.fire("elementSelected", el);
        this.expand(el);
        el.wrapper.classList.add(this.selectedClass);
      } }, { key: 'close', value: function close(

      el) {
        el.selected = false;
        this.fire("elementUnselected", el);
        this.collapse(el);
        el.wrapper.classList.remove(this.selectedClass);
      } }, { key: 'toggle', value: function toggle(

      el) {var _this2 = this;
        if (el.selected) {
          this.close(el);
        } else {
          this.open(el);

          if (this.oneAtATime) {
            this.els.filter(function (e) {return e != el && e.selected;}).forEach(function (e) {
              _this2.close(e);
            });
          }
        }
      } }, { key: 'attachEvents', value: function attachEvents()

      {var _this3 = this;
        this.els.forEach(function (el, i) {
          el.trigger.addEventListener("click", _this3.toggle.bind(_this3, el));
        });
      } }, { key: 'setDefaultData', value: function setDefaultData()

      {
        this.els = [];
        this.events = {
          'elementSelected': [],
          'elementOpened': [],
          'elementUnselected': [],
          'elementClosed': [] };

        this.transitionendevent = this.transitionendEventName();
        this.oneAtATime = true;
        this.selectedClass = "selected";
        this.trigger = "[data-accordion-element-trigger]";
        this.content = "[data-accordion-element-content]";
      } }, { key: 'setCustomData', value: function setCustomData(

      data) {
        var keys = Object.keys(data);

        for (var i = 0; i < keys.length; i++) {
          this[keys[i]] = data[keys[i]];
        }
      } }, { key: 'fire', value: function fire(

      eventName, el) {
        var callbacks = this.events[eventName];
        for (var i = 0; i < callbacks.length; i++) {
          callbacks[i](el);
        }
      } }, { key: 'on', value: function on(

      eventName, cb) {
        if (!this.events[eventName]) return;
        this.events[eventName].push(cb);
      } }]);

    function _class(data) {var _this4 = this;_classCallCheck(this, _class);
      this.setDefaultData();
      this.setCustomData(data); // ES6 => Object.assign(this, data)

      [].forEach.call(document.querySelectorAll(this.elements), function (el, i) {
        _this4.els.push({
          wrapper: el,
          trigger: el.querySelector(_this4.trigger),
          content: el.querySelector(_this4.content) });


        _this4.els[i].content.style.height = 0;
      });

      this.attachEvents();
    }return _class;}();


}();

var myAccordion = new gianniAccordion({
  elements: ".card article" });


myAccordion.on("elementSelected", function (data) {
  console.log("elementOpened", data);
});