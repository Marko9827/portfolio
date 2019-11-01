<? header("Content-type: application/javascript");  ?>





!function (i) {
    "use strict";

    function e(i, e) {
        for (var n in e) e.hasOwnProperty(n) && (i[n] = e[n]);
        return i
    }

    function n(i, n) {
        this.el = i, this.options = e({}, this.options), e(this.options, n), this.ctrlClose = this.el.querySelector("[data-dialog-close]"), this.isOpen = !1, this._initEvents()
    }
    var t = {
        animations: Modernizr.cssanimations
    },
        o = {
            WebkitAnimation: "webkitAnimationEnd",
            OAnimation: "oAnimationEnd",
            msAnimation: "MSAnimationEnd",
            animation: "animationend"
        },
        s = o[Modernizr.prefixed("animation")],
        a = function (i, e) {
            var n = function (i) {
                if (t.animations) {
                    if (i.target != this) return;
                    this.removeEventListener(s, n)
                }
                e && "function" == typeof e && e.call()
            };
            t.animations ? i.addEventListener(s, n) : n()
        };
    n.prototype.options = {
        onOpenDialog: function () {
            return $("#menu , .open-close-menu , .pagepil-left , .pagepil-right").addClass("popup-opened"), $.fn.pagepiling.setKeyboardScrolling(!1), !1
        },
        onCloseDialog: function () {
            return $("#menu , .open-close-menu , .pagepil-left , .pagepil-right").removeClass("popup-opened"), $.fn.pagepiling.setKeyboardScrolling(!0), !1
        }
    }, n.prototype._initEvents = function () {
        var i = this;
        this.ctrlClose.addEventListener("click", this.toggle.bind(this)), document.addEventListener("keydown", function (e) {
            var n = e.keyCode || e.which;
            27 === n && i.isOpen && i.toggle()
        }), this.el.querySelector(".dialog__overlay").addEventListener("click", this.toggle.bind(this))
    }, n.prototype.toggle = function () {
        var i = this;
        this.isOpen ? (classie.remove(this.el, "dialog--open"), classie.add(i.el, "dialog--close"), a(this.el.querySelector(".dialog__content"), function () {
            classie.remove(i.el, "dialog--close")
        }), this.options.onCloseDialog(this)) : (classie.add(this.el, "dialog--open"), this.options.onOpenDialog(this)), this.isOpen = !this.isOpen
    }, i.DialogFx = n
}(window),
    function () {
        var e = document.querySelectorAll("[data-dialog]"),
            n, t;
        for (i = 0; i < e.length; i++) n = document.getElementById(e[i].getAttribute("data-dialog")), t = new DialogFx(n), e[i].addEventListener("click", t.toggle.bind(t))
    }();