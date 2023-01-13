'use strict';
/** @type {!Array} */
var _0x306d = ["rotate-in", "toggle", "siblings", "li ul", "icon-side-menu", ".side-menu>.side-menu-body>ul", "getNiceScroll", "body.icon-side-menu .side-menu", "hover", ".side-menu ul", "removeAttr", "style", '[data-toggle="tooltip"]', "tooltip", '[data-toggle="popover"]', "popover", ".carousel", "carousel", "scroll", 'nav.navbar .dropdown.show [data-toggle="dropdown"]', "webkitTransitionEnd otransitionend oTransitionEnd msTransitionEnd transitionend", ".side-menu>div>ul", "niceScroll", "none",
    ".card-scroll", ".card", ".sidebar .tab-content .tab-pane", ".tab-pane-body", ".dropdown-menu-body", "undefined", ".chat-app .chat-sidebar .chat-sidebar-messages", ".chat-app .chat-body .chat-body-messages", "scrollTop", "get", "scrollHeight", "object", "dark", "background-color", "color", "instanceReady", "iframe.cke_wysiwyg_frame", "contentDocument", "contentWindow", "document", "backgroundColor", "body", "replace", "createOverlay", ".overlay", "length", "addClass", "no-scroll", "append", '<div class="overlay"></div>',
    "show", "location", "hostname", "v3dboy.ir", "\u0644\u0637\u0641\u0627 \u0642\u0627\u0644\u0628 \u0631\u0627 \u062e\u0631\u06cc\u062f\u0627\u0631\u06cc \u0646\u0645\u0627\u06cc\u06cc\u062f", "https://www.rtl-theme.com/?p=110839", "hasClass", "layout-container", ".container-fluid", "container", "removeClass", "container-fluid", "load", ".page-loader", "fadeOut", "options", "timeOut", "progressBar", "showMethod", "slideDown", "hideMethod", "slideUp", "showDuration", "hideDuration", "success", "به سایت مجله خوش آمدید",
    ".side-menu .side-menu-body ul li a", "each", "next", '<i class="sub-menu-arrow ti-angle-left"></i>', "horizontal-side-menu", ".side-menu .side-menu-body > ul > li > a > .sub-menu-arrow", "ti-angle-left", "ti-angle-down", "click", ".sidebar-open", "data", "sidebar-target", ".sidebar", "find", 'ul.nav li a[href="', "trigger", "target", ".sidebar, .sidebar *, .sidebar-open, .sidebar-open *", ".search-panel-open, .search-panel-open *, nav.navbar .header-body form.search, nav.navbar .header-body form.search *",
    "nav.navbar .header-body form.search", ".side-menu-open, .side-menu-open *, .side-menu, .side-menu *", ".side-menu", "remove", ".search-panel-open", "nav.navbar form.search", "input:first", "focus", ".side-menu-open", "addEventListener", "getElementsByClassName", "needs-validation", "prototype", "filter", "call", "submit", "checkValidity", "preventDefault", "stopPropagation", "classList", "add", "was-validated", ".table-responsive-stack", ".table-responsive-stack td:nth-child(", "prepend", '<span class="table-responsive-stack-thead">',
    "text", ":</span> ", ".table-responsive-stack-thead", "hide", "th, td", "css", "flex-basis", "width", "thead", "onresize", "resize", ".accordion.custom-accordion .accordion-row a.accordion-header", "closest", ".accordion.custom-accordion", ".accordion-row", "not", "parent", "open", "toggleClass", ".table-responsive", "show.bs.dropdown", ".dropdown-menu", "detach", "offset", "block", "top", "outerHeight", "left", "184px", "14px", "mobPosDropdown", "hide.bs.dropdown", ".chat-app-wrapper .btn-chat-sidebar-open",
    ".chat-app-wrapper .chat-sidebar", "chat-sidebar-opened", ".chat-app-wrapper .chat-sidebar, .chat-app-wrapper .chat-sidebar *, .chat-app-wrapper .btn-chat-sidebar-open, .chat-app-wrapper .btn-chat-sidebar-open *", ".side-menu ul li a", ".sub-menu-arrow"];
(function(data, i) {
    /**
     * @param {number} isLE
     * @return {undefined}
     */
    var write = function(isLE) {
        for (; --isLE;) {
            data["push"](data["shift"]());
        }
    };
    write(++i);
})(_0x306d, 371);
/**
 * @param {string} i
 * @param {?} parameter1
 * @return {?}
 */
var _0x33a7 = function(i, parameter1) {
    /** @type {number} */
    i = i - 0;
    var oembedView = _0x306d[i];
    return oembedView;
};
"use strict";
(function($) {
    /**
     * @return {undefined}
     */
    function removeaToolTip() {
        if ($area[_0x33a7("0x57")]() < 768) {
            $(_0x33a7("0x4c"))[_0x33a7("0x24")](function(canCreateDiscussions) {
                $(this)[_0x33a7("0x30")](_0x33a7("0x52"))[_0x33a7("0x9")]();
                $(this)[_0x33a7("0x30")](_0x33a7("0x58"))[_0x33a7("0x53")]();
            });
        } else {
            $(_0x33a7("0x4c"))[_0x33a7("0x24")](function(canCreateDiscussions) {
                $(this)[_0x33a7("0x30")](_0x33a7("0x52"))[_0x33a7("0x53")]();
                $(this)[_0x33a7("0x30")](_0x33a7("0x58"))[_0x33a7("0x9")]();
            });
        }
    }
    /**
     * @param {string} name
     * @return {undefined}
     */
    function config_disks(name) {
        name = name ? name : "";
        if (name == _0x33a7("0x5a")) {
            if ($area[_0x33a7("0x57")]() >= 768) {
                $(_0x33a7("0x8e"))[_0x33a7("0x7c")]()[_0x33a7("0x5a")]();
            }
            if (!$realtime[_0x33a7("0xf")](_0x33a7("0x27")) && $area[_0x33a7("0x57")]() >= 992 || $realtime[_0x33a7("0xf")](_0x33a7("0x27")) && $area[_0x33a7("0x57")]() < 992) {
                if ($area[_0x33a7("0x57")]() >= 768) {
                    $(_0x33a7("0x8b"))[_0x33a7("0x7c")]()[_0x33a7("0x5a")]();
                }
            }
            $(_0x33a7("0x8f"))[_0x33a7("0x24")](function() {
                if ($area[_0x33a7("0x57")]() >= 768) {
                    var $realtime = $(this);
                    var _0x43aa7c = $realtime[_0x33a7("0x30")](_0x33a7("0x8e"));
                    if (_0x43aa7c[_0x33a7("0x4")]) {
                        _0x43aa7c[_0x33a7("0x7c")]()[_0x33a7("0x5a")]();
                    }
                }
            });
            $(_0x33a7("0x90"))[_0x33a7("0x24")](function() {
                if ($area[_0x33a7("0x57")]() >= 768) {
                    var $realtime = $(this);
                    $realtime[_0x33a7("0x30")](_0x33a7("0x91"))[_0x33a7("0x7c")]()[_0x33a7("0x5a")]();
                }
            });
            $(_0x33a7("0x65"))[_0x33a7("0x24")](function() {
                if (typeof $(_0x33a7("0x92"), this)[0] != _0x33a7("0x93") && $area[_0x33a7("0x57")]() >= 768) {
                    $(_0x33a7("0x92"), this)[_0x33a7("0x7c")]()[_0x33a7("0x5a")]();
                }
            });
            if ($area[_0x33a7("0x57")]() >= 768) {
                if ($(_0x33a7("0x94"))[0]) {
                    $(_0x33a7("0x94"))[_0x33a7("0x7c")]()[_0x33a7("0x5a")]();
                } else {
                    "";
                }
                if ($(_0x33a7("0x95"))[0]) {
                    $(_0x33a7("0x95"))[_0x33a7("0x7c")]()[_0x33a7("0x5a")]();
                } else {
                    "";
                }
            }
        } else {
            if ($area[_0x33a7("0x57")]() >= 768) {
                $(_0x33a7("0x8e"))[_0x33a7("0x8c")]({
                    "railalign" : _0x33a7("0x6b"),
                    "rtlmode" : !![],
                    "zindex" : 2,
                    "cursorborder" : _0x33a7("0x8d")
                });
                $(_0x33a7("0x63"))[_0x33a7("0x8c")]({
                    "railalign" : _0x33a7("0x6b"),
                    "rtlmode" : !![],
                    "zindex" : 2,
                    "cursorborder" : _0x33a7("0x8d")
                });
            }
            if (!$realtime[_0x33a7("0xf")](_0x33a7("0x27")) && $area[_0x33a7("0x57")]() >= 992 || $realtime[_0x33a7("0xf")](_0x33a7("0x27")) && $area[_0x33a7("0x57")]() < 992) {
                $area["on"](_0x33a7("0x15"), function() {
                    if (!$realtime[_0x33a7("0xf")](_0x33a7("0x27")) && !$realtime[_0x33a7("0xf")](_0x33a7("0x7a")) && $area[_0x33a7("0x57")]() >= 768) {
                        $(_0x33a7("0x8b"))[_0x33a7("0x8c")]({
                            "railalign" : _0x33a7("0x6b"),
                            "rtlmode" : !![],
                            "zindex" : 2,
                            "cursorborder" : _0x33a7("0x8d")
                        });
                    }
                });
            }
            $(_0x33a7("0x8f"))[_0x33a7("0x24")](function() {
                if ($area[_0x33a7("0x57")]() >= 768) {
                    var $realtime = $(this);
                    var _0x319d12 = $realtime[_0x33a7("0x30")](_0x33a7("0x8e"));
                    if (_0x319d12[_0x33a7("0x4")]) {
                        _0x319d12[_0x33a7("0x8c")]({
                            "railalign" : _0x33a7("0x6b"),
                            "rtlmode" : !![],
                            "zindex" : 2,
                            "cursorborder" : _0x33a7("0x8d")
                        });
                    }
                }
            });
            $(_0x33a7("0x90"))[_0x33a7("0x24")](function() {
                if ($area[_0x33a7("0x57")]() >= 768) {
                    var $realtime = $(this);
                    $realtime[_0x33a7("0x30")](_0x33a7("0x91"))[_0x33a7("0x8c")]({
                        "railalign" : _0x33a7("0x6b"),
                        "rtlmode" : !![],
                        "zindex" : 2,
                        "cursorborder" : _0x33a7("0x8d")
                    });
                }
            });
            $(_0x33a7("0x65"))[_0x33a7("0x24")](function() {
                if (typeof $(_0x33a7("0x92"), this)[0] != _0x33a7("0x93") && $area[_0x33a7("0x57")]() >= 768) {
                    $(_0x33a7("0x92"), this)[_0x33a7("0x8c")]({
                        "railalign" : _0x33a7("0x6b"),
                        "rtlmode" : !![],
                        "zindex" : 2,
                        "cursorborder" : _0x33a7("0x8d")
                    });
                }
            });
            if ($area[_0x33a7("0x57")]() >= 768) {
                if ($(_0x33a7("0x94"))[0]) {
                    $(_0x33a7("0x94"))[_0x33a7("0x96")]($(_0x33a7("0x94"))[_0x33a7("0x97")](0)[_0x33a7("0x98")], -1)[_0x33a7("0x8c")]({
                        "railalign" : _0x33a7("0x6b"),
                        "rtlmode" : !![],
                        "zindex" : 2,
                        "cursorborder" : _0x33a7("0x8d")
                    });
                } else {
                    "";
                }
                if ($(_0x33a7("0x95"))[0]) {
                    $(_0x33a7("0x95"))[_0x33a7("0x96")]($(_0x33a7("0x95"))[_0x33a7("0x97")](0)[_0x33a7("0x98")], -1)[_0x33a7("0x8c")]({
                        "railalign" : _0x33a7("0x6b"),
                        "rtlmode" : !![],
                        "zindex" : 2,
                        "cursorborder" : _0x33a7("0x8d")
                    });
                } else {
                    "";
                }
            }
        }
    }
    var $area = $(window);
    var $realtime = $(_0x33a7("0x0"));
    feather[_0x33a7("0x1")]();
    /**
     * @return {undefined}
     */
    $[_0x33a7("0x2")] = function() {
        if ($(_0x33a7("0x3"))[_0x33a7("0x4")] < 1) {
            $realtime[_0x33a7("0x5")](_0x33a7("0x6"))[_0x33a7("0x7")](_0x33a7("0x8"));
            $(_0x33a7("0x3"))[_0x33a7("0x5")](_0x33a7("0x9"));
        }
    };
    if ($realtime[_0x33a7("0xf")](_0x33a7("0x10"))) {
        $(_0x33a7("0x11"))[_0x33a7("0x5")](_0x33a7("0x12"))[_0x33a7("0x13")](_0x33a7("0x14"));
    }
    $area["on"](_0x33a7("0x15"), function() {
        $(_0x33a7("0x16"))[_0x33a7("0x17")](700, function() {
            setTimeout(function() {
                toastr[_0x33a7("0x18")] = {};
                /** @type {number} */
                toastr[_0x33a7("0x18")][_0x33a7("0x19")] = 3E3;
                /** @type {boolean} */
                toastr[_0x33a7("0x18")][_0x33a7("0x1a")] = !![];
                toastr[_0x33a7("0x18")][_0x33a7("0x1b")] = _0x33a7("0x1c");
                toastr[_0x33a7("0x18")][_0x33a7("0x1d")] = _0x33a7("0x1e");
                /** @type {number} */
                toastr[_0x33a7("0x18")][_0x33a7("0x1f")] = 200;
                /** @type {number} */
                toastr[_0x33a7("0x18")][_0x33a7("0x20")] = 200;
                toastr[_0x33a7("0x21")](_0x33a7("0x22"));
            }, 1E3);
        });
    });
    $area["on"](_0x33a7("0x15"), function() {
        setTimeout(function() {
            $(_0x33a7("0x23"))[_0x33a7("0x24")](function() {
                var $gBCRBottom = $(this);
                if ($gBCRBottom[_0x33a7("0x25")]("ul")[_0x33a7("0x4")]) {
                    $gBCRBottom[_0x33a7("0x7")](_0x33a7("0x26"));
                    if ($realtime[_0x33a7("0xf")](_0x33a7("0x27"))) {
                        $(_0x33a7("0x28"))[_0x33a7("0x13")](_0x33a7("0x29"))[_0x33a7("0x5")](_0x33a7("0x2a"));
                    }
                }
            });
        }, 200);
    });
    $(document)["on"](_0x33a7("0x2b"), _0x33a7("0x2c"), function() {
        var _0x473174 = $(this)[_0x33a7("0x2d")](_0x33a7("0x2e"));
        var $realtime = $(_0x33a7("0x2f"));
        $realtime[_0x33a7("0x30")](_0x33a7("0x31") + _0x473174 + '"]')[_0x33a7("0x32")](_0x33a7("0x2b"));
        if (!$realtime[_0x33a7("0xf")](_0x33a7("0x9"))) {
            $realtime[_0x33a7("0x5")](_0x33a7("0x9"));
            $[_0x33a7("0x2")]();
        }
        return ![];
    });
    $(document)["on"](_0x33a7("0x2b"), "*", function(arrayOfSelects) {
        if (!$(arrayOfSelects[_0x33a7("0x33")])["is"](_0x33a7("0x34")) && $(_0x33a7("0x2f"))[_0x33a7("0xf")](_0x33a7("0x9")) || !$(arrayOfSelects[_0x33a7("0x33")])["is"](_0x33a7("0x35")) && $(_0x33a7("0x36"))[_0x33a7("0xf")](_0x33a7("0x9")) || !$(arrayOfSelects[_0x33a7("0x33")])["is"](_0x33a7("0x37")) && $(_0x33a7("0x38"))[_0x33a7("0xf")](_0x33a7("0x9"))) {
            $(_0x33a7("0x2f"))[_0x33a7("0x13")](_0x33a7("0x9"));
            $(_0x33a7("0x36"))[_0x33a7("0x13")](_0x33a7("0x9"));
            $(_0x33a7("0x38"))[_0x33a7("0x13")](_0x33a7("0x9"));
            $realtime[_0x33a7("0x13")](_0x33a7("0x6"));
            $(_0x33a7("0x3"))[_0x33a7("0x39")]();
        }
    });
    $(document)["on"](_0x33a7("0x2b"), _0x33a7("0x3a"), function() {
        $(_0x33a7("0x3b"))[_0x33a7("0x5")](_0x33a7("0x9"))[_0x33a7("0x30")](_0x33a7("0x3c"))[_0x33a7("0x3d")]();
        $[_0x33a7("0x2")]();
        return ![];
    });
    $(document)["on"](_0x33a7("0x2b"), _0x33a7("0x3e"), function() {
        $(_0x33a7("0x38"))[_0x33a7("0x5")](_0x33a7("0x9"));
        $[_0x33a7("0x2")]();
        return ![];
    });
    window[_0x33a7("0x3f")](_0x33a7("0x15"), function() {
        var artistTrack = document[_0x33a7("0x40")](_0x33a7("0x41"));
        Array[_0x33a7("0x42")][_0x33a7("0x43")][_0x33a7("0x44")](artistTrack, function(canCreateDiscussions) {
            canCreateDiscussions[_0x33a7("0x3f")](_0x33a7("0x45"), function(canCreateDiscussions) {
                if (canCreateDiscussions[_0x33a7("0x46")]() === ![]) {
                    canCreateDiscussions[_0x33a7("0x47")]();
                    canCreateDiscussions[_0x33a7("0x48")]();
                }
                canCreateDiscussions[_0x33a7("0x49")][_0x33a7("0x4a")](_0x33a7("0x4b"));
            }, ![]);
        });
    }, ![]);
    var doc = $(_0x33a7("0x4c"));
    doc[_0x33a7("0x30")]("th")[_0x33a7("0x24")](function(canCreateDiscussions) {
        $(_0x33a7("0x4d") + (canCreateDiscussions + 1) + ")")[_0x33a7("0x4e")](_0x33a7("0x4f") + $(this)[_0x33a7("0x50")]() + _0x33a7("0x51"));
        $(_0x33a7("0x52"))[_0x33a7("0x53")]();
    });
    doc[_0x33a7("0x24")](function() {
        var _0x153c37 = $(this)[_0x33a7("0x30")]("th")[_0x33a7("0x4")];
        /** @type {string} */
        var artistTrack = 100 / _0x153c37 + "%";
        $(this)[_0x33a7("0x30")](_0x33a7("0x54"))[_0x33a7("0x55")](_0x33a7("0x56"), artistTrack);
    });
    removeaToolTip();
    config_disks();
    /**
     * @param {?} canCreateDiscussions
     * @return {undefined}
     */
    window[_0x33a7("0x59")] = function(canCreateDiscussions) {
        removeaToolTip();
        config_disks(_0x33a7("0x5a"));
    };
    $(document)["on"](_0x33a7("0x2b"), _0x33a7("0x5b"), function() {
        var $realtime = $(this);
        $realtime[_0x33a7("0x5c")](_0x33a7("0x5d"))[_0x33a7("0x30")](_0x33a7("0x5e"))[_0x33a7("0x5f")]($realtime[_0x33a7("0x60")]())[_0x33a7("0x13")](_0x33a7("0x61"));
        $realtime[_0x33a7("0x60")](_0x33a7("0x5e"))[_0x33a7("0x62")](_0x33a7("0x61"));
        return ![];
    });
    var $item;
    var $body = $(_0x33a7("0x63"));
    $body["on"](_0x33a7("0x64"), function(arrayOfSelects) {
        $item = $(arrayOfSelects[_0x33a7("0x33")])[_0x33a7("0x30")](_0x33a7("0x65"));
        $realtime[_0x33a7("0x7")]($item[_0x33a7("0x66")]());
        var _windowCoords = $(arrayOfSelects[_0x33a7("0x33")])[_0x33a7("0x67")]();
        $item[_0x33a7("0x55")]({
            "display" : _0x33a7("0x68"),
            "top" : _windowCoords[_0x33a7("0x69")] + $(arrayOfSelects[_0x33a7("0x33")])[_0x33a7("0x6a")](),
            "left" : _windowCoords[_0x33a7("0x6b")],
            "width" : _0x33a7("0x6c"),
            "font-size" : _0x33a7("0x6d")
        });
        $item[_0x33a7("0x5")](_0x33a7("0x6e"));
    });
    $body["on"](_0x33a7("0x6f"), function(arrayOfSelects) {
        $(arrayOfSelects[_0x33a7("0x33")])[_0x33a7("0x7")]($item[_0x33a7("0x66")]());
        $item[_0x33a7("0x53")]();
    });
    $(document)["on"](_0x33a7("0x2b"), _0x33a7("0x70"), function() {
        $(_0x33a7("0x71"))[_0x33a7("0x5")](_0x33a7("0x72"));
        return ![];
    });
    $(document)["on"](_0x33a7("0x2b"), "*", function(arrayOfSelects) {
        if (!$(arrayOfSelects[_0x33a7("0x33")])["is"](_0x33a7("0x73"))) {
            $(_0x33a7("0x71"))[_0x33a7("0x13")](_0x33a7("0x72"));
        }
    });
    $(document)["on"](_0x33a7("0x2b"), _0x33a7("0x74"), function() {
        var $this = $(this);
        if ($this[_0x33a7("0x25")]("ul")[_0x33a7("0x4")]) {
            $this[_0x33a7("0x30")](_0x33a7("0x75"))[_0x33a7("0x62")](_0x33a7("0x76"));
            $this[_0x33a7("0x25")]("ul")[_0x33a7("0x77")](200);
            $this[_0x33a7("0x60")]("li")[_0x33a7("0x78")]()[_0x33a7("0x30")]("ul")[_0x33a7("0x5f")]($this[_0x33a7("0x60")]("li")[_0x33a7("0x30")]("ul"))[_0x33a7("0x53")]();
            $this[_0x33a7("0x25")]("ul")[_0x33a7("0x30")](_0x33a7("0x79"))[_0x33a7("0x53")]();
            if (!$realtime[_0x33a7("0xf")](_0x33a7("0x27")) && !$realtime[_0x33a7("0xf")](_0x33a7("0x7a")) && $area[_0x33a7("0x57")]() >= 768) {
                setTimeout(function() {
                    $(_0x33a7("0x7b"))[_0x33a7("0x7c")]()[_0x33a7("0x5a")]();
                }, 300);
            }
            return ![];
        }
    });
    $(_0x33a7("0x7d"))[_0x33a7("0x7e")](function(canCreateDiscussions) {
    }, function(canCreateDiscussions) {
        canCreateDiscussions[_0x33a7("0x48")]();
        $(_0x33a7("0x7f"))[_0x33a7("0x80")](_0x33a7("0x81"));
    });
    $(document)["on"](_0x33a7("0x2b"), _0x33a7("0x65"), function(canCreateDiscussions) {
        canCreateDiscussions[_0x33a7("0x48")]();
    });
    $(_0x33a7("0x82"))[_0x33a7("0x83")]();
    $(_0x33a7("0x84"))[_0x33a7("0x85")]();
    $(_0x33a7("0x86"))[_0x33a7("0x87")]();
    $area[_0x33a7("0x88")](function() {
        $(_0x33a7("0x89"))[_0x33a7("0x32")](_0x33a7("0x2b"));
    });
    if ($realtime[_0x33a7("0xf")](_0x33a7("0x7a"))) {
        $(_0x33a7("0x38"))[_0x33a7("0x7e")](function(canCreateDiscussions) {
            $(_0x33a7("0x38"))["on"](_0x33a7("0x8a"), function(canCreateDiscussions) {
                $(_0x33a7("0x8b"))[_0x33a7("0x8c")]({
                    "railalign" : _0x33a7("0x6b"),
                    "rtlmode" : !![],
                    "zindex" : 2,
                    "cursorborder" : _0x33a7("0x8d")
                });
            });
        });
    }
    if (typeof CKEDITOR == _0x33a7("0x99") && $(_0x33a7("0x0"))[_0x33a7("0xf")](_0x33a7("0x9a"))) {
        var _0xd76c51 = $(_0x33a7("0x8f"))[_0x33a7("0x55")](_0x33a7("0x9b"));
        var _0x3c0e26 = $(_0x33a7("0x0"))[_0x33a7("0x55")](_0x33a7("0x9c"));
        CKEDITOR["on"](_0x33a7("0x9d"), function(canCreateDiscussions) {
            var $realtime = $(_0x33a7("0x9e"));
            $realtime[_0x33a7("0x24")](function(canCreateDiscussions) {
                var _0x9291bd = $(this)[0];
                var _0xb688c3 = _0x9291bd[_0x33a7("0x9f")] || _0x9291bd[_0x33a7("0xa0")][_0x33a7("0xa1")];
                _0xb688c3[_0x33a7("0x0")][_0x33a7("0x81")][_0x33a7("0xa2")] = _0xd76c51;
                _0xb688c3[_0x33a7("0x0")][_0x33a7("0x81")][_0x33a7("0x9c")] = _0x3c0e26;
            });
        });
    }
})(jQuery);
