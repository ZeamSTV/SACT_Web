function AnimationDelay() {
    $(Itemx).each(function(e, t) {
        var a = 50,
            o = 250,
            i = Math.floor(e) * ((o - a) / 2 - a);
        $(t).css({
            "-webkit-animation-delay": i + "ms",
            "animation-delay": i + "ms"
        })
    })
}

function VideoFull() {
    function e(e) {
        e || (e = window.event), ThisVideo.pause(), ThisVideo.currentTime = 0, l.value = 0, g("playPause"), $(".player-vid").addClass("show").removeClass("hide"), $(".pic-video").removeClass("hide"), $(".slogan").removeClass("hide"), p() && (document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen ? document.webkitCancelFullScreen() : document.msExitFullscreen && document.msExitFullscreen(), h(!1))
    }
    if (supportsVideo) {
        var t = document.getElementById("videocontainer"),
            a = document.getElementById("videocontrols");
        ThisVideo.controls = !1, a.setAttribute("data-state", "visible");
        var o = document.getElementById("playpause"),
            i = document.getElementById("stop"),
            n = document.getElementById("mute"),
            l = document.getElementById("progress"),
            s = document.getElementById("progressbar"),
            r = document.getElementById("fullscreen"),
            c = void 0 !== document.createElement("progress").max;
        c || l.setAttribute("data-state", "fake");
        var d = !!(document.fullscreenEnabled || document.mozFullScreenEnabled || document.msFullscreenEnabled || document.webkitSupportsFullscreen || document.webkitFullscreenEnabled || document.createElement("video").webkitRequestFullScreen);
        d || (r.style.display = "none");
        var u = function(e) {
                if (e) {
                    var t = Math.floor(10 * ThisVideo.volume) / 10;
                    "+" === e ? 1 > t && (ThisVideo.volume += .1) : "-" === e && t > 0 && (ThisVideo.volume -= .1), 0 >= t ? ThisVideo.muted = !0 : ThisVideo.muted = !1
                }
                g("mute")
            },
            h = function(e) {
                t.setAttribute("data-fullscreen", !!e), r.setAttribute("data-state", e ? "cancel-fullscreen" : "go-fullscreen"), 1 == e ? $("body").addClass("fullvideo") : $("body").removeClass("fullvideo")
            },
            p = function() {
                return !!(document.fullScreen || document.webkitIsFullScreen || document.mozFullScreen || document.msFullscreenElement || document.fullscreenElement)
            },
            m = function() {
                p() ? (document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen ? document.webkitCancelFullScreen() : document.msExitFullscreen && document.msExitFullscreen(), h(!1)) : (t.requestFullscreen ? t.requestFullscreen() : t.mozRequestFullScreen ? t.mozRequestFullScreen() : t.webkitRequestFullScreen ? ThisVideo.webkitRequestFullScreen() : t.msRequestFullscreen && t.msRequestFullscreen(), h(!0))
            };
        if (document.addEventListener) {
            ThisVideo.addEventListener("loadedmetadata", function() {
                l.setAttribute("max", ThisVideo.duration)
            });
            var g = function(e) {
                "playPause" == e ? ThisVideo.paused || ThisVideo.ended ? o.setAttribute("data-state", "play") : o.setAttribute("data-state", "pause") : "mute" == e && n.setAttribute("data-state", ThisVideo.muted ? "unmute" : "mute")
            };
            ThisVideo.addEventListener("play", function() {
                g("playPause")
            }, !1), ThisVideo.addEventListener("pause", function() {
                g("playPause")
            }, !1), ThisVideo.addEventListener("volumechange", function() {
                u()
            }, !1), o.addEventListener("click", function() {
                ThisVideo.paused || ThisVideo.ended ? (ThisVideo.play(), $(".player-vid").addClass("hide").removeClass("show"), $(".slogan").addClass("hide")) : (ThisVideo.pause(), $(".player-vid").addClass("show").removeClass("hide"), $(".slogan").removeClass("hide"))
            }), i.addEventListener("click", function() {
                ThisVideo.pause(), ThisVideo.currentTime = 0, l.value = 0, g("playPause"), $(".player-vid").addClass("show").removeClass("hide"), $(".pic-video").removeClass("hide"), $(".slogan").removeClass("hide"), p() && (document.exitFullscreen ? document.exitFullscreen() : document.mozCancelFullScreen ? document.mozCancelFullScreen() : document.webkitCancelFullScreen ? document.webkitCancelFullScreen() : document.msExitFullscreen && document.msExitFullscreen(), h(!1))
            }), n.addEventListener("click", function() {
                ThisVideo.muted = !ThisVideo.muted, g("mute")
            }), r.addEventListener("click", function() {
                m()
            }), ThisVideo.addEventListener("timeupdate", function() {
                l.getAttribute("max") || l.setAttribute("max", ThisVideo.duration), l.value = ThisVideo.currentTime, s.style.width = Math.floor(ThisVideo.currentTime / ThisVideo.duration * 100) + "%"
            }), l.addEventListener("click", function(e) {
                var t = (e.pageX - (this.offsetLeft + this.offsetParent.offsetLeft + this.offsetParent.offsetParent.offsetLeft)) / this.offsetWidth;
                ThisVideo.currentTime = t * ThisVideo.duration
            }), document.addEventListener("fullscreenchange", function() {
                h(!(!document.fullScreen && !document.fullscreenElement))
            }), document.addEventListener("webkitfullscreenchange", function() {
                h(!!document.webkitIsFullScreen)
            }), document.addEventListener("mozfullscreenchange", function() {
                h(!!document.mozFullScreen)
            }), document.addEventListener("msfullscreenchange", function() {
                h(!!document.msFullscreenElement)
            }), ThisVideo.addEventListener("ended", e, !1), $(".player-vid").on("click", function(e) {
                e.preventDefault(), $(".pic-video").addClass("hide"), (ThisVideo.paused || ThisVideo.ended) && (ThisVideo.play(), $(".controls").addClass("addshow"), $(".player-vid").addClass("hide").removeClass("show"), $(".slogan").addClass("hide"))
            }), isTouchDevice || null != isMobile.all ? (g("mute"), o.setAttribute("data-state", "pause")) : (g("mute"), o.setAttribute("data-state", "pause"), 0 == Details && ($("#mute").trigger("click"), Details = 1), $(".video-full, .video-cover .overlay").on("click", function() {
                ThisVideo.paused || ThisVideo.ended ? (ThisVideo.play(), $(".player-vid").addClass("hide").removeClass("show"), $(".slogan").addClass("hide")) : (ThisVideo.pause(), $(".player-vid").addClass("show").removeClass("hide"), $(".slogan").removeClass("hide"))
            }))
        }
    }
}

function NavClick() {
    $(".nav-click").on("click", function() {
        return $(".nav-click").hasClass("active") ? ($(".navigation").scrollTop(0), $(".nav-click").removeClass("active"), $(".sub-nav").removeClass("no-link"), $(".overlay-menu, .navigation").removeClass("show"), $("html, body").removeClass("no-scroll"), $(".box-video-center").length && $('.group-central[data-name="intro-home"]').hasClass("show-text") && StartPlay()) : ($(".navigation").scrollTop(0), $(".nav-click").addClass("active"), $(".sub-nav").addClass("no-link"), $(".overlay-menu, .navigation").addClass("show"), $("html, body").addClass("no-scroll"), $(".box-video-center").length && $('.group-central[data-name="intro-home"]').hasClass("show-text") && StopPlay()), !1
    }), $(".subscribe-icon").on("click", function() {
        return document.getElementById("register").reset(), $("html, body").addClass("no-scroll"), $(".register-form").scrollTop(0), $(".subscribe-icon").addClass("active"), $(".sub-nav").addClass("no-link"), $(".register-form").addClass("show"), $(".register-form h3").addClass("show"), $(".require-col").children().each(function() {
            var e = $(this);
            $(e).addClass("show")
        }), $(".box-video-center").length && $('.group-central[data-name="intro-home"]').hasClass("show-text") && StopPlay(), !1
    }), $(".close, .register-form span").on("click", function() {
        return $("html, body").removeClass("no-scroll"), $(".register-form").scrollTop(0), $(".subscribe-icon").removeClass("active"), $(".sub-nav").removeClass("no-link"), $(".register-form").removeClass("show"), $(".register-form h3, .register-form .require-col .input-text, .register-form .input-area, .register-form .input-but").removeClass("show"), $(".box-video-center").length && $('.group-central[data-name="intro-home"]').hasClass("show-text") && StartPlay(), !1
    }), $(".subscribe-icon").on("mouseenter", function() {
        $(".nav-click").hasClass("active") && $(".nav-click").trigger("click")
    }), $(".overlay-menu").on("click", function() {
        $(".nav-click").hasClass("active") && $(".nav-click").trigger("click")
    }), $(".hotline span.call").on("click", function() {
        return $(".hotline ul").hasClass("show") ? $(".hotline ul").removeClass("show") : $(".hotline ul").addClass("show"), !1
    })
}

function BoxSlide() {
    function e() {
        n = !0, TweenMax.set($(".group-central"), {
            zIndex: ""
        }), $("#home-page").length && (clearTimeout(timex), $(".box-text").removeClass("move"), $(".box-text > p > span").removeClass("move"), l.stopAutoplay()), $(".box-nav li").removeClass("current active"), $(".box-nav li").eq(i).addClass("current active"), TweenMax.fromTo($(".group-central")[i], 1, {
            zIndex: 2
        }, {
            y: "0%",
            ease: Quad.easeOut,
            onComplete: function() {
                if ($(".group-central").removeClass("show-text"), $(".group-central").eq(i).addClass("show-text"), $(".box-nav li").eq(i).removeClass("active"), $("#home-page").length) a();
                else {
                    if ($(".show-text .scrollA").length) {
                        var e = $(".show-text .scrollA").innerHeight();
                        e >= $(window).height() - 280 ? ($(".show-text .scrollA").css({
                            height: $(window).height() - 280,
                            "padding-right": 30
                        }), ScrollNiceA()) : ($(".show-text .scrollA").css({
                            height: "auto",
                            "padding-right": 0
                        }), ScrollNiceHide())
                    }
                    var t = ($(".group-central.show-text").attr("data-hash"), $(".group-central.show-text").attr("data-href")),
                        o = $(".group-central.show-text").attr("data-title"),
                        l = $(".group-central.show-text").attr("data-keyword"),
                        s = $(".group-central.show-text").attr("data-description"),
                        r = $(".group-central.show-text").attr("data-hash");
                    changeUrl(t, o, s, l, r, o, s)
                }
                TweenMax.set($(".group-central").not($(".group-central")[i]), {
                    y: "100%"
                }), n = !1
            }
        })
    }

    function t() {
        n = !0, TweenMax.set($(".group-central"), {
            zIndex: ""
        }), $("#home-page").length && (clearTimeout(timex), $(".box-text").removeClass("move"), $(".box-text > p > span").removeClass("move"), l.stopAutoplay()), $(".box-nav li").removeClass("current active"), $(".box-nav li").eq(i).addClass("current active"), TweenMax.fromTo($(".group-central")[i], 1, {
            y: "-100%",
            zIndex: 2
        }, {
            y: "0%",
            ease: Quad.easeOut,
            onComplete: function() {
                if ($(".group-central").removeClass("show-text"), $(".group-central").eq(i).addClass("show-text"), $(".box-nav li").eq(i).removeClass("active"), $("#home-page").length) a();
                else {
                    if ($(".show-text .scrollA").length) {
                        var e = $(".show-text .scrollA").innerHeight();
                        e >= $(window).height() - 280 ? ($(".show-text .scrollA").css({
                            height: $(window).height() - 280,
                            "padding-right": 30
                        }), ScrollNiceA()) : ($(".show-text .scrollA").css({
                            height: "auto",
                            "padding-right": 0
                        }), ScrollNiceHide())
                    }
                    var t = ($(".group-central.show-text").attr("data-hash"), $(".group-central.show-text").attr("data-href")),
                        o = $(".group-central.show-text").attr("data-title"),
                        l = $(".group-central.show-text").attr("data-keyword"),
                        s = $(".group-central.show-text").attr("data-description"),
                        r = $(".group-central.show-text").attr("data-hash");
                    changeUrl(t, o, s, l, r, o, s)
                }
                TweenMax.set($(".group-central").not($(".group-central")[i]), {
                    y: "100%"
                }), n = !1
            }
        })
    }

    function a() {
        switch (i) {
            case 0:
                StartPlay(), l.stopAutoplay(), clearTimeout(timex);
                break;
            case 1:
                StopPlay(), l.slideNext(), l.startAutoplay(), AniText2();
                break;
            case 2:
                StopPlay(), l.stopAutoplay(), clearTimeout(timex);
                break;
            case 3:
                StopPlay(), l.stopAutoplay(), clearTimeout(timex);
                break;
            case 4:
                StopPlay(), l.stopAutoplay(), clearTimeout(timex);
                break;
            case 5:
                StopPlay(), l.stopAutoplay(), clearTimeout(timex)
        }
    }
    var o = $(".group-central").length,
        i = $(".group-central").index(),
        n = !1;
    if ($("#home-page").length) var l = $(".slide-pics")[0].swiper;
    TweenMax.set($(".group-central").not($(".group-central")[i]), {
        y: "100%"
    }), $(window).width() > 1100 && !$("body").hasClass("fullvideo") && $(".box-slider").on("mousewheel", function(a) {
        var l;
        n === !1 && (l = function() {
            var e = Math.max(-1, Math.min(1, a.wheelDelta || -a.deltaY || -a.detail));
            return e
        }()), $(window).width() > 1100 && !$("body").hasClass("fullvideo") && (null != $(".group-central")[i] && 1 === parseInt(l) ? (i >= o - 1 ? i = 0 : i++, e()) : null != $(".group-central")[i] && -1 === parseInt(l) && (0 >= i ? i = o - 1 : i--, t()))
    }), $(".box-nav li").on("click", function() {
        var a = $(this).index();
        return n ? !1 : (!n && a > i ? (i = a, e()) : !n && i > a && (i = a, t()), !1)
    }), $(".box-nav li:first-child").addClass("current active"), setTimeout(function() {
        $(".group-central:first-child").addClass("show-text")
    }, 500), setTimeout(function() {
        $(".box-nav li").removeClass("active")
    }, 1e3)
}

function SlidePicture() {
    if ($("#home-page").length) {
        new Swiper(".slide-pics", {
            speed: 1e3,
            paginationClickable: !0,
            pagination: ".pagination",
            autoplay: 4e3,
            effect: "fade",
            loop: !0,
            nextButton: ".button-next",
            prevButton: ".button-prev",
            onInit: function(e) {
                $(window).width() > 1100 ? (e.stopAutoplay(), BoxSlide()) : e.startAutoplay()
            },
            onTransitionStart: function() {},
            onTransitionEnd: function() {}
        });
        $(window).width() > 1100 ? setTimeout(function() {
            addMove()
        }, 1e3) : setTimeout(function() {
            $(".logo").addClass("show")
        }, 500)
    }
    if ($("#contact-page, #product-page, #product-details-page, #location-page").length) {
        if ($("#product-details-page").length) var e = !0;
        else var e = !1;
        if ($(window).width() > 1100) {
            var t = new Swiper(".slide-bg", {
                speed: 1e3,
                direction: "vertical",
                simulateTouch: !1,
                mousewheelControl: !0,
                keyboardControl: !0,
                parallax: e,
                effect: "slide",
                onInit: function(e) {
                    if ($(".slide-bg .item-container").removeClass("show-text"), $(".slide-bg .item-container").eq(e.activeIndex).addClass("show-text"), $(".sub-nav").addClass("show"), $(".show-text .scrollA").length) {
                        var t = $(".show-text .scrollA").innerHeight();
                        t >= $(window).height() - 280 ? ($(".show-text .scrollA").css({
                            height: $(window).height() - 280,
                            "padding-right": 30
                        }), ScrollNiceA()) : ($(".show-text .scrollA").css({
                            height: "auto",
                            "padding-right": 0
                        }), ScrollNiceHide())
                    }
                    var a = $(".show-text").attr("data-hash");
                    $('.sub-nav li a[data-name= "' + a + '"]').parent().addClass("current"), $('.sub-product li a[data-name= "' + a + '"]').parent().addClass("current")
                },
                onTransitionStart: function() {
                    $(".house-text").removeClass("show"), $(".sub-nav li, .sub-product li").removeClass("current active");
                    var e = $(".slide-bg .item-active").attr("data-hash");
                    $('.sub-nav li a[data-name= "' + e + '"]').parent().addClass("current active"), $('.sub-product li a[data-name= "' + e + '"]').parent().addClass("current active"), $(".scrollA").length && ScrollNiceHide()
                },
                onTransitionEnd: function(e) {
                    if ($("#location-page").length && ScaleMap(), $(".slide-bg .item-container").removeClass("show-text"), $(".note-facilities").removeClass("show"), $(".dot-num").removeClass("fadeindown"), $(".slide-bg .item-container").eq(e.activeIndex).addClass("show-text"), $(".show-text .scrollA").length) {
                        var t = $(".show-text .scrollA").innerHeight();
                        t >= $(window).height() - 280 ? ($(".show-text .scrollA").css({
                            height: $(window).height() - 280,
                            "padding-right": 30
                        }), ScrollNiceA()) : ($(".show-text .scrollA").css({
                            height: "auto",
                            "padding-right": 0
                        }), ScrollNiceHide())
                    }
                    var a = $(".show-text").attr("data-hash");
                    if ($('.sub-nav li a[data-name= "' + a + '"]').parent().removeClass("active"), $('.sub-product li a[data-name= "' + a + '"]').parent().removeClass("active"), $(".sub-nav").length) var o = ($(".sub-nav li.current a").attr("data-name"), $(".sub-nav li.current a").attr("href")),
                        i = $(".sub-nav li.current a").attr("data-title"),
                        n = $(".sub-nav li.current a").attr("data-keyword"),
                        l = $(".sub-nav li.current a").attr("data-description"),
                        s = $(".sub-nav li.current a").attr("data-name");
                    else if ($(".sub-product").length) var o = ($(".sub-product li.current a").attr("data-name"), $(".sub-product li.current a").attr("href")),
                        i = $(".sub-product li.current a").attr("data-title"),
                        n = $(".sub-product li.current a").attr("data-keyword"),
                        l = $(".sub-product li.current a").attr("data-description"),
                        s = $(".sub-product li.current a").attr("data-name");
                    changeUrl(o, i, l, n, s, i, l)
                }
            });
            setTimeout(function() {
                t.once("onInit")
            }, 200)
        }
    }
    var a = $(".pic-center");
    $(a).each(function(e, t) {
        $(t).BTQSlider({
            pagination: !0,
            navigation: !0,
            slideSpeed: 600,
            paginationSpeed: 600,
            rewindNav: !1,
            autoHeight: !0,
            itemsCustom: [
                [0, 1],
                [300, 1],
                [400, 1],
                [500, 1],
                [600, 2],
                [1100, 2]
            ],
            afterAction: function() {
                this.$BTQItems.removeClass("select"), this.$BTQItems.eq(this.currentItem).addClass("select"), Check()
            }
        })
    });
    var o = $(".detail-slider");
    $(o).each(function(e, t) {
        $(t).BTQSlider({
            singleItem: !0,
            slideSpeed: 800,
            paginationSpeed: 800,
            navigation: !0,
            pagination: !0,
            lazyLoad: !0,
            afterAction: function() {
                Check(), this.$BTQItems.eq(this.currentItem).parent().parent().parent().parent().find(".thumb-slider .thumb-pic").removeClass("current");
                var e = this.$BTQItems.eq(this.currentItem).index();
                this.$BTQItems.eq(this.currentItem).parent().parent().parent().parent().find('.thumb-slider .thumb-pic[data-slide= "' + e + '"]').addClass("current")
            }
        });
        var a = $(t).parent().find(".thumb-slider .thumb-pic");
        $(a).on("click", function() {
            $(a).removeClass("current"), $(this).addClass("current");
            var e = $(this).attr("data-slide");
            $(t).trigger("BTQ.goTo", e)
        })
    }), setTimeout(function() {
        Check()
    }, 500)
}

function Check() {
    var e = $(window).width(),
        t = $(".pic-center, .video-slide, .pdf-slide");
    $("#library-page, #product-page, #product-details-page").length && $(".slide-buttons").each(function(e, t) {
        var a = $(this).parent().parent().innerHeight();
        $(t).css({
            top: -a / 2
        })
    }), $(t).each(function() {
        var t = $(this).find(".slide-item").length;
        e > 1100 ? t >= 2 ? $(this).removeClass("TA-center") : $(this).addClass("TA-center") : e >= 600 && 1100 >= e ? t >= 2 ? $(this).removeClass("TA-center") : $(this).addClass("TA-center") : $(this).removeClass("TA-center")
    })
}

function StopPlay() {
    ThisVideo.paused && ThisVideo.ended || (ThisVideo.pause(), $(".controls").removeClass("addshow"))
}

function StartPlay() {
    (ThisVideo.paused || ThisVideo.ended) && ($(".player-vid").hasClass("show") || (ThisVideo.play(), $(".controls").addClass("addshow")))
}

function addMove() {
    $(".slogan-2").addClass("move"), 0 == Videoload && (Videoload = 1, setTimeout(function() {
        $(".center-content").addClass("out"), $(".center-content").one(animationEnd, function() {
            $(".logo, .slogan").addClass("show"), $('.group-central[data-name="intro-home"]').hasClass("show-text") && (isTouchDevice || null != isMobile.all || $(".player-vid").trigger("click"))
        })
    }, 2e3))
}

function AniText2() {
    $(".show-text .box-text h3").length && ($(".show-text .box-text").addClass("move"), $(".show-text .box-text > p").children().each(function(e) {
        var t = $(this);
        timex = setTimeout(function() {
            $(t).addClass("move")
        }, 50 * (e + 1))
    }))
}

function AniText() {
    $(".title-page").addClass("show"), $(".title-page h1").children().children().each(function(e) {
        var t = $(this);
        setTimeout(function() {
            $(t).addClass("move")
        }, 100 * (e + 1))
    })
}

function MoveBackground() {
    function e() {
        TweenLite.to(".box-pic.moving", 1, {
            transform: "rotate3d(0, 0, 0, 0deg) scale(1)",
            ease: Power2.easeOut
        }), TweenLite.to(".pic-extra", 1, {
            x: 0,
            y: 0,
            z: 0,
            ease: Power2.easeOut
        }), TweenLite.to(".extra-text", 1, {
            x: 0,
            y: 0,
            ease: Power2.easeOut
        })
    }

    function t() {
        DX = o.X - i, DY = o.Y - n, MoveX = DY / n, MoveY = -(DX / i), Radius = Math.sqrt(Math.pow(MoveX, 2) + Math.pow(MoveY, 2)), Degree = 2 * Radius, TweenLite.to(".box-pic.moving", 1, {
            transform: "rotate3d(" + 20 * MoveX + ", " + 10 * MoveY + ", 0, " + 5 * Degree + "deg) scale(1.2)",
            ease: Power2.easeOut
        }), $(".moving > .box-extra .pic-extra").each(function(e, t) {
            TweenLite.to(t, 1, {
                x: 50 * MoveX,
                y: 50 * MoveY,
                z: 200 * Degree,
                ease: Power2.easeOut
            })
        }), $(".moving > .box-extra .extra-text").each(function(e, t) {
            TweenLite.to(t, 3, {
                x: 100 * MoveX,
                y: 100 * MoveY,
                ease: Power2.easeOut
            })
        })
    }
    if ($(window).width() > 1100) {
        var a = null,
            o = {
                X: 0,
                Y: 0
            },
            i = $(window).width() / 2,
            n = $(window).height() / 2,
            l = $(".box-pic, .content-extra");
        $(l).addClass("moving"), $(l).on("mousemove", function(e) {
            o.X = e.pageX, o.Y = e.pageY, cancelAnimationFrame(a), a = requestAnimationFrame(t)
        }), $(".left-bg, .viewer").on("mouseenter", function() {
            cancelAnimationFrame(a), e()
        }), $(window).resize(function() {
            i = $(window).width() / 2, n = $(window).height() / 2
        })
    }
}

function NewsLoad(e, t) {
    var a = $(t).find(".news-text");
    $(a).length && $(a).remove(), $(".news-list").addClass("hide"), $(".scrollB").getNiceScroll().hide(), $.ajax({
        url: e,
        cache: !1,
        success: function(e) {
            $(t).find(".news-content").append(e), $(window).width() <= 1100 ? $(".news-text img").addClass("zoom-pic") : $(".news-text img").removeClass("zoom-pic"), ZoomPic(), $(".news-text a, .news-text p a").on("click", function(e) {
                e.preventDefault();
                var t = $(this).attr("href");
                return window.open(t, "_blank"), !1
            }), $(t).find(".news-content").stop().animate({
                opacity: 1
            }, 100, "linear", function() {
                $(window).width() > 1100 ? ScrollNiceC() : detectBut(), $(t).find(".news-text").addClass("fadein"), $(".loadicon").fadeOut(500, function() {
                    $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
                })
            }), $(".close-news, .click-hover").on("click", function() {
                $(".news-content").stop().animate({
                    opacity: 0
                }, 600, "linear", function() {
                    $(".colum-box-news").removeClass("show"), $(".scrollC").scrollTop(0), $(".scrollC").getNiceScroll().remove(), $(".news-content").children().remove(), $(".news-list").removeClass("hide"), $(".slogan, .hotline, .nav-click, .language, .subscribe-icon, .logo").removeClass("scale"), $(".grid-item").hasClass("show") || $(".grid-item").addClass("show"), ScrollNiceB();
                    var e = $(".sub-news li.current a").attr("href"),
                        t = $(".sub-news li.current a").attr("data-title"),
                        a = $(".sub-news li.current a").attr("data-keyword"),
                        o = $(".sub-news li.current a").attr("data-description"),
                        i = $(".sub-news li.current a").attr("data-name");
                    changeUrl(e, t, o, a, i, t, o)
                })
            })
        }
    })
}

function LoadProgress(e, t) {
    $(".scrollB").children().length && $(".scrollB").children().remove(), $.ajax({
        url: e,
        cache: !1,
        success: function(e) {
            $(".scrollB").append(e), $(".progress-list").stop().animate({
                opacity: 1
            }, 500, "linear", function() {
                $(window).width() > 1100 && ScrollNiceB(), $(".box-library h2").text(t).removeClass("fadeout").addClass("fadein"), $(".box-progress").each(function(e) {
                    var t = $(this);
                    setTimeout(function() {
                        $(t).addClass("fadein")
                    }, 100 * (e + 1))
                }), $(".select-list").addClass("fadein"), $(".loadicon").fadeOut(500, function() {
                    $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
                })
            }), $(".view-album").on("click", function(e) {
                e.preventDefault();
                var t = $(this).attr("data-href");
                return $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $("html, body").addClass("no-scroll"), $(".overlay-dark").addClass("show"), $(".all-album").fadeIn(300, "linear", function() {
                    AlbumLoad(t, 0)
                }), !1
            }), $(".box-progress").on("click", function(e) {
                return e.preventDefault(), $(this).find("a").trigger("click"), !1
            })
        }
    })
}

function VideoLoad(e) {
    $.ajax({
        url: e,
        cache: !1,
        success: function(e) {
            function t() {
                o.play()
            }

            function a() {
                o.pause()
            }
            if ($(".allvideo").append(e), $("#view-video").length) var o = document.getElementById("view-video");
            $(".nav-click").hasClass("active") && $(".nav-click").trigger("click"), $(".loadicon").fadeOut(300, "linear", function() {
                $("#view-video").length && t(), $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
            });
            var i = $("#view-video").length;
            $(".close-video").on("click", function() {
                0 != i && a(), $(".allvideo").fadeOut(500, "linear", function() {
                    if ($(".overlay-dark").removeClass("show"), $(".allvideo .video-list").remove(), $("html, body").removeClass("no-scroll"), $(".to-scrollV").length) {
                        var e = $(".to-scrollV").offset().top;
                        $(".to-scrollV").removeClass("to-scrollV"), $(window).width() < 1100 && $("html, body").scrollTop(e - 60)
                    }
                })
            })
        }
    })
}

function AlbumLoad(e, t) {
    $.ajax({
        url: e,
        cache: !1,
        success: function(e) {
            function a() {
                clearTimeout(timex), $(".pic-name").removeClass("move"), $(".pic-name h3").children().children().removeClass("move"), $(".pic-name small").children().children().removeClass("move"), $(".item-active").find(".pic-name").addClass("move"), $(".move h3, .move  small").children().children().each(function(e) {
                    var t = $(this);
                    setTimeout(function() {
                        $(t).addClass("move")
                    }, 100 * (e + 1))
                })
            }
            if ($(".all-album").append(e), $(".all-album .album-load").length > 1 && $(".all-album .album-load").last().remove(), $(".pic-name > h3").lettering("words").children("span").lettering().children("span").lettering(), $(".pic-name > small").lettering("words").children("span").lettering().children("span").lettering(), $(window).width() > 1100) var o = 1;
            else if ($(window).width() > 740 && $(window).width() <= 1100) var o = 2;
            else var o = 3;
            new Swiper(".album-center", {
                zoom: !0,
                zoomMax: o,
                lazyLoading: !0,
                watchSlidesVisibility: !0,
                preloadImages: !1,
                slidesPerView: 1,
                speed: 600,
                grabCursor: !0,
                nextButton: ".next-pic",
                prevButton: ".prev-pic",
                spaceBetween: 0,
                centeredSlides: !0,
                keyboardControl: !0,
                mousewheelControl: !0,
                onInit: function(e) {
                    e.slideTo(t, 0, !0), a(), o > 1 && $(".container-zoom img").addClass("zoomscale")
                },
                onTransitionStart: function() {},
                onTransitionEnd: function() {
                    $(".container-zoom img").removeClass("zoomin"), $(".close-album, .slide-pic-nav").removeClass("level-index-out"), a()
                }
            });
            $(".album-load").animate({
                opacity: 1
            }, 100, "linear", function() {
                $(".album-pic-center").length > 1 && $(".slide-pic-nav").css({
                    display: "block"
                }), $(".loadicon").fadeOut(500, function() {
                    $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
                })
            }), $(".close-album").on("click", function() {
                return $(".all-album").fadeOut(500, "linear", function() {
                    $(".overlay-dark").removeClass("show"), $(".album-load").remove()
                }), $("html, body").removeClass("no-scroll"), !1
            });
            var i = document.querySelector(".all-album");
            i.addEventListener("touchmove", function(e) {
                e.preventDefault()
            })
        }
    })
}

function ZoomMap() {
    $(".viewer").addClass("desktop").addClass("fadein");
    var e = $(".viewer");
    e.find(".panzoom").panzoom({
        $zoomIn: e.find(".pic-zoom-in"),
        $zoomOut: e.find(".pic-zoom-out"),
        $zoomRange: e.find(".zoom-range"),
        $reset: e.find(".pic-reset"),
        maxScale: 4,
        minScale: 1,
        increment: .3,
        contain: "automatic"
    }).panzoom("zoom");
    var t = e.find(".panzoom").panzoom();
    t.on("mousewheel.focal", function(e) {
        e.preventDefault();
        var a = e.delta || e.originalEvent.wheelDelta,
            o = a ? 0 > a : e.originalEvent.deltaY > 0;
        t.panzoom("zoom", o, {
            increment: .1,
            animate: !1,
            focal: e
        })
    }), $(".map-img").addClass("show"), ScaleMap(), setTimeout(function() {
        $(".location-pointer").addClass("show")
    }, 1e3), $(".zoom-box").each(function(e) {
        var t = $(this);
        setTimeout(function() {
            $(t).addClass("show")
        }, 300 * (e + 1))
    })
}

function ScaleMap() {
    $(".panzoom").css({
        "-webkit-transform": "matrix(1, 0, 0, 1, 0, 0)",
        transform: "matrix(1, 0, 0, 1, 0, 0)"
    });
    var e = $(window).height() / 1e3;
    $(".map-img.show").scale(e)
}

function FocusText() {
    var e = "Há» vĂ  TĂªn (*)  Äiá»‡n thoáº¡i (*) Email (*)  Äá»‹a chá»‰ Sá»‘ CMND (*) Full name (*)  Phone numbers (*) Address ID card (*)",
        t = "";
    $("input").focus(function() {
        t = $(this).val(), e.indexOf(t) >= 0 && $(this).val("")
    }), $("input").focusout(function() {
        "" == $(this).val() && $(this).val(t)
    });
    var a = "";
    $("textarea").focus(function() {
        a = $(this).val(), $(this).val("")
    }).focusout(function() {
        "" == $(this).val() && $(this).val(a)
    })
}

function ScrollNiceA() {
    $(window).width() <= 1100 ? ($(".scrollA").getNiceScroll().remove(), $(".scrollA").css({
        "overflow-x": "visible",
        "overflow-y": "visible"
    })) : ($(".show-text .scrollA").css({
        "overflow-x": "hidden",
        "overflow-y": "hidden"
    }), $(".show-text .scrollA").getNiceScroll().show(), $(".show-text .scrollA").niceScroll({
        touchbehavior: !0,
        horizrailenabled: !1,
        cursordragontouch: !0,
        grabcursorenabled: !1,
        cursorcolor: "#ffffff"
    }), $(".show-text .scrollA").animate({
        scrollTop: "0px"
    }))
}

function ScrollNiceB() {
    $(window).width() <= 1100 ? ($(".scrollB").getNiceScroll().remove(), $(".scrollB").css({
        "overflow-x": "visible",
        "overflow-y": "visible"
    })) : ($(".scrollB").css({
        "overflow-x": "hidden",
        "overflow-y": "hidden"
    }), $(".scrollB").getNiceScroll().show(), $(".scrollB").niceScroll({
        touchbehavior: !0,
        horizrailenabled: !1,
        cursordragontouch: !0,
        grabcursorenabled: !1,
        cursorcolor: "#ffffff"
    }), 0 == News && $(".scrollB").animate({
        scrollTop: "0px"
    }))
}

function ScrollNiceC() {
    $(window).width() <= 1100 ? ($(".scrollC").getNiceScroll().remove(), $(".scrollC").css({
        "overflow-x": "visible",
        "overflow-y": "visible"
    })) : ($(".scrollC").css({
        "overflow-x": "hidden",
        "overflow-y": "hidden"
    }), $(".scrollC").getNiceScroll().show(), $(".scrollC").niceScroll({
        touchbehavior: !0,
        horizrailenabled: !1,
        cursordragontouch: !0,
        grabcursorenabled: !1,
        cursorcolor: "#ffffff"
    }), $(".scrollC").animate({
        scrollTop: "0px"
    }))
}

function ScrollNiceHide() {
    $(".scrollA, .scrollB, .scrollC").getNiceScroll().remove()
}

function LinkPage() {
    $("a.link-load, a.link-home, a.go-page, .go-details, .location-pointer a, .go-product,.go-products, .sub-news li a,.go-back,.derect").on("click", function(e) {
        e.preventDefault(), ScrollNiceHide();
        var t = $(this).attr("href");
        return $(".mask").removeClass("hide"), $("html, body").addClass("no-scroll"), $(".container").stop().animate({
            opacity: 1
        }, 500, "linear", function() {
            window.location = t
        }), !1
    })
}

function ContentLoad() {
    function e() {
        var e = new Date,
            t = e.getFullYear();
        $(".select-box li a[data-year='" + t + "']").trigger("click")
    }
    if (ResizeWindows(), AnimationDelay(), LinkPage(), FocusText(), NavClick(), Option(), ZoomPic(), MoveBackground(), $("html, body").removeClass("no-scroll"), $("#home-page").length || ($(".logo").css({
            cursor: "pointer"
        }), $(".logo").on("click", function() {
            $("a.link-home").trigger("click")
        })), $(".link-blank").on("click", function() {
            $(".nav-click").trigger("click")
        }), $("#map-canvas").length && initialize(), $("#video-full").length && VideoFull(), setTimeout(function() {
            AniText(), $(".degree-icon").addClass("show")
        }, 200), $("#home-page").length && ($(".link-home").addClass("current"), $(".subscribe-icon").addClass("hidden"), $(".bottom-link > a").addClass("hidden"), $(".wheel").addClass("show"), $(".box-news").on("click", function(e) {
            e.preventDefault(), $(this).find(".go-details").trigger("click")
        })), $("#about-page, #library-page").length && ($(".wheel").addClass("show"), $(".subscribe-icon").addClass("show"), $(".logo, .slogan").addClass("show"), $(".box-library-picture, .box-library-video").on("click", function(e) {
            e.preventDefault(), $(this).find("a").trigger("click")
        }), $(window).width() > 1100 && (BoxSlide(), $(".box-nav li.current").length ? setTimeout(function() {
            $(".box-nav li.current").trigger("click")
        }, 500) : $(".box-nav li:first-child").trigger("click"))), $("#contact-page, #location-page").length && ($(".wheel").addClass("show"), $(".subscribe-icon").addClass("show"), $(".logo, .slogan").addClass("show"), $(".sub-nav li").on("click", function(e) {
            e.preventDefault();
            var t = $(this).find("a").attr("data-name");
            if ($(window).width() > 1100) {
                var a = $(".slide-bg")[0].swiper,
                    o = $(".item-container[data-hash='" + t + "']").index();
                a.slideTo(o, 1200, !0)
            }
            return !1
        }), $(".google-map").on("click", function(e) {
            e.preventDefault();
            var t = $(this).attr("data-name");
            return $(".sub-nav li a[data-name='" + t + "']").trigger("click"), !1
        }), $(window).width() > 1100 && ($(".sub-nav li.current").length ? setTimeout(function() {
            $(".sub-nav li.current").trigger("click")
        }, 500) : $(".sub-nav li:first-child").trigger("click"))), $("#location-page").length && ($(window).width() > 1100 && (ZoomMap(), setTimeout(function() {
            ScrollNiceA()
        }, 1e3)), $(".zoom-box, .go-products").on("mouseenter", function() {
            var e = $(this).attr("data-target"),
                t = $(this).offset().left,
                a = $(this).offset().top;
            $('.show-box[data-box= "' + e + '"]').css({
                left: t + 30,
                top: a - 30
            }), $('.show-box[data-box= "' + e + '"]').addClass("showup")
        }), $(".zoom-box, .go-products").on("mouseleave", function() {
            $(".show-box").removeClass("showup")
        })), $("#facilities-page").length && ($(".subscribe-icon").addClass("show"), $(".logo, .slogan").addClass("show"), $(".bottom-link  .go-page:nth-child(1)").addClass("hidden"), $(".facilities").addClass("show-text"), $(".degree-icon, .social").addClass("b-right"), setTimeout(function() {
            $(".note-facilities").addClass("show"), ScrollNiceA()
        }, 500), $(".all-dot-top").children().each(function(e) {
            var t = $(this);
            setTimeout(function() {
                $(t).addClass("fadeindown")
            }, 200 * (e + 1))
        }), $(".all-dot-top a").on("mouseenter", function(e) {
            e.preventDefault(), e.stopPropagation(), $(".all-dot-top a, .note-facilities li").removeClass("current"), $(this).addClass("current"), $(".show-box-pic").removeClass("showup");
            var t = $(this).attr("data-name"),
                a = $(this).offset().left,
                o = $(this).offset().top,
                i = ($(this).width(), $(".show-box-pic").width(), $(this).attr("data-box")),
                n = $(".show-box-pic[data-pic='" + i + "']").innerHeight();
            return $(window).width() > 1100 && ($(".show-box-pic[data-pic='" + i + "']").css({
                left: a + 50,
                top: o - (n / 2 - 15)
            }).addClass("showup"), $(".note-facilities li[data-text='" + t + "']").addClass("current")), !1
        }), $(".note-facilities li").on("mouseenter", function(e) {
            e.preventDefault(), e.stopPropagation();
            var t = $(this).attr("data-text"),
                a = $(".all-dot-top a[data-name ='" + t + "']");
            return $(".all-dot-top a, .note-facilities li").removeClass("current"), $(a).addClass("current"), $(".show-box-pic").removeClass("showup"), $(".all-dot-top a[data-name='" + t + "']").trigger("mouseenter"), !1
        }), $(".note-facilities li, .all-dot-top a").on("mouseleave", function() {
            $(".all-dot-top a, .note-facilities li").removeClass("current"), $(".show-box-pic").removeClass("showup")
        }), $(".area-plan").on("mouseenter", function(e) {
            e.preventDefault(), $(".facilities-bg img").removeClass("current").addClass("hide");
            var t = $(this).attr("data-plan");
            return $(".facilities-bg img[data-plan='" + t + "']").addClass("current"), !1
        }), $(".area-plan").on("mouseleave", function() {
            $(".facilities-bg img").removeClass("current hide")
        })), $("#product-page, #product-details-page").length && ($(".logo, .slogan, .sub-product").addClass("show"), $(".wheel").addClass("show"), $(".subscribe-icon").addClass("show"), $(".bottom-link .go-page:nth-child(2)").addClass("hidden"), setTimeout(function() {
            $(".go-back").addClass("show");
        }, 500), $(".area-dot").each(function(e) {
            var t = $(this);
            setTimeout(function() {
                $(t).addClass("fadeindown")
            }, 200 * (e + 1))
        }), $(".sub-nav li, .sub-product li").on("click", function(e) {
            e.preventDefault();
            var t = $(this).find("a").attr("data-name");
            if ($(window).width() > 1100) {
                var a = $(".slide-bg")[0].swiper,
                    o = $(".item-container[data-hash='" + t + "']").index();
                a.slideTo(o, 1200, !0)
            }
            return !1
        }), $(".onarea").hover(function(e) {
            if ($(window).width() > 1100) {
                $(".plan-text").removeClass("show");
                var t = $(this).attr("data-name"),
                    a = e.clientX,
                    o = e.clientY,
                    i = $(".plan-text[data-block='" + t + "']").width(),
                    n = $(".plan-text[data-block='" + t + "']").innerHeight();
                $(".plan-text[data-block='" + t + "']").css({
                    left: a - i / 2,
                    top: o - (n + 60)
                }), $(".plan-text[data-block='" + t + "']").addClass("show"), $(".area-dot[data-plan='" + t + "']").addClass("hide")
            }
        }, function() {
            $(window).width() > 1100 && ($(".plan-text").removeClass("show"), $(".area-dot").removeClass("hide"))
        }), $(".onarea:not(.derect)").on("click", function(e) {
            e.preventDefault();
            var t = $(this).attr("data-name");
            if ($(window).width() > 1100) {
                var a = $(".slide-bg")[0].swiper,
                    o = $(".item-container[data-hash='" + t + "']").index();
                a.slideTo(o, 1200, !0)
            }
            return !1
        }), $(window).width() > 1100 && ($(".sub-nav li.current").length ? setTimeout(function() {
            $(".sub-nav li.current").trigger("click")
        }, 500) : $(".sub-product li.current").length ? setTimeout(function() {
            $(".sub-product li.current").trigger("click")
        }, 500) : ($(".sub-nav li:first-child").trigger("click"), $(".sub-product li:first-child").trigger("click")))), $("#news-page").length) {
        $(".logo, .slogan").addClass("show"), $(".wheel").addClass("show"), $(".bg-cover").addClass("show"), $(".subscribe-icon, .sub-news").addClass("show");
        var t = $(".container").attr("data-news");
        if ($(".sub-news li a[data-name='" + t + "']").parent().addClass("current"), detectBut(), $(".link-page").on("click", function(e) {
                e.preventDefault(), News = 1, $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $(".slogan, .hotline, .nav-click, .language, .subscribe-icon, .logo").addClass("scale"), $(".link-page").removeClass("current"), $(this).addClass("current");
                var t = $(this).parent().parent().parent().parent().parent().find(".colum-box-news");
                $(this).parent().parent().parent().parent().parent().attr("data-hash");
                $(t).addClass("show");
                var a = ($(this).find("a").attr("data-name"), $(this).find("a").attr("href")),
                    o = $(this).find("a").attr("data-title"),
                    i = $(this).find("a").attr("data-keyword"),
                    n = $(this).find("a").attr("data-description"),
                    l = $(this).find("a").attr("data-name");
                changeUrl(a, o, n, i, l, o, n);
                var s = $(this).find("a").attr("href");
                return $(t).find(".news-content").stop().animate({
                    opacity: 0
                }, 500, "linear", function() {
                    NewsLoad(s, t)
                }), !1
            }), $(".select-header").bind("click", function() {
                $(".select-header").hasClass("onclick") ? ($(".select-header").removeClass("onclick"), $(this).next(".select-box").fadeOut(200, "linear")) : ($(this).addClass("onclick"), $(this).next(".select-box").fadeIn(200, "linear"), $(this).closest(".select-list").on("mouseleave", function() {
                    $(this).find(".select-box").fadeOut(200, "linear"), $(".select-header").removeClass("onclick")
                }))
            }), $(".select-box li a").on("click", function(e) {
                e.preventDefault(), $(this).parent().parent().find("li").removeClass("selected"), $(this).parent().parent().parent().parent().find(".select-header h3").text($(this).text()), $(this).parent().addClass("selected"), $(this).closest(".select-box").fadeOut(200, "linear"), $(".box-library h2").removeClass("fadeindown").addClass("fadeout"), $(".select-header").removeClass("onclick");
                var t = $(this).attr("data-year"),
                    a = $(this).attr("href"),
                    o = t,
                    i = $(this).attr("href"),
                    n = $(this).attr("data-title"),
                    l = $(this).attr("data-keyword"),
                    s = $(this).attr("data-description"),
                    r = $(this).attr("data-year");
                return changeUrl(i, n, s, l, r, n, s), $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $(".progress-list").stop().animate({
                    opacity: 0
                }, 500, "linear", function() {
                    LoadProgress(a, o)
                }), !1
            }), $(".sub-news li").on("click", function(e) {
                e.preventDefault(), $(this).find("a").trigger("click")
            }), $(".select-box").length)
            if ($(".select-box li.selected").length) $(".select-box li.selected a").trigger("click");
            else if ($(".select-box li a").length) {
            var a = new Date,
                o = a.getFullYear(),
                i = !1;
            $(".select-box li a").each(function(e, t) {
                $(t).attr("data-year") == o && (i = !0)
            }), 1 == i ? e() : $(".select-box li:nth-child(1) a").trigger("click")
        } else $(".loadicon").remove();
        var n = $(".newsid").text();
        $('.link-page a[data-name="n-' + n + '"]').parent().addClass("current"), $(window).width() > 1100 ? $(".link-page.current").length ? $(".link-page.current").trigger("click") : ($(".grid-item").addClass("show"), $(".loadicon").stop().fadeOut(500, function() {
            ScrollNiceB(), $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
        })) : $(".colum-box-news").hasClass("show") || $(".news-list").each(function(e, t) {
            $(".link-page.current").length ? $(t).find(".link-page.current").trigger("click") : $(t).find(".grid-item:first-child .link-page").trigger("click")
        })
    }
}

function ThumbZoom(e) {
    $("html, body").addClass("no-scroll"), $(this).parent().addClass("to-scroll"), $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $(".all-pics").addClass("show"), $(".all-pics").append('<div class="full"  style="display:block"></div>'), $(".overlay-dark").addClass("show");
    var t = e,
        a = t.replace("_s", "_l");
    $(".all-pics").find(".full").append('<img src ="' + a + '" alt="pic" />'), $(".all-pics").find(".full").append("<span></span>"), $("body").append('<a class="close-pics" href="javascript:void(0);"></a>'), $(".all-pics").append('<a class="close-pics-small" href="javascript:void(0);"></a>'), $(".all-pics img").on("load", function() {
        $(".all-pics").addClass("show"), 0 != TouchLenght && isTouchDevice ? ($(".full").addClass("pinch-zoom"), $(".pinch-zoom").each(function() {
            new Pic.PinchZoom($(this), {})
        })) : ($(".full").addClass("dragscroll"), $(".dragscroll").draptouch()), $(".full img").length > 1 && $(".full img").last().remove(), $(".loadicon").fadeOut(400, "linear", function() {
            0 != TouchLenght && isTouchDevice || detectMargin(), $(".full img").addClass("fadein"), $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
        })
    }), $(window).width() > 1100 && $(".full span").on("click", function() {
        $(".close-pics").trigger("click")
    }), $(".close-pics, .close-pics-small").on("click", function() {
        $(".loadicon").fadeOut(500, function() {
            $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
        }), $(".full").fadeOut(300, "linear", function() {
            if ($(".overlay-dark").removeClass("show"), $(".all-pics .full, .all-pics .text-length, .all-pics .pinch-zoom-container").remove(), $(".close-pics, .close-pics-small").remove(), $(".all-pics").removeClass("show"), $("html, body").removeClass("no-scroll"), $(".to-scroll").length) {
                var e = $(".to-scroll").offset().top;
                $(window).width() < 1100 && $("html, body").scrollTop(e - 60), $(".to-scroll").removeClass("to-scroll")
            }
        })
    })
}

function ZoomPic() {
    $("img").on("click", function() {
        if ($(window).width() <= 1100 && $(this).hasClass("zoom-pic")) {
            $("html, body").addClass("no-scroll"), $(this).parent().addClass("to-scrollZ"), $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $(".all-pics").addClass("show"), $(".all-pics").append('<div class="full"  style="display:block"></div>'), $(".overlay-dark").addClass("show");
            var e = $(this).attr("src");
            $(".all-pics").find(".full").append('<img src ="' + e + '" alt="pic" />'), $(".all-pics").append('<a class="close-pics-small href="javascript:void(0);""></a>'), $(".all-pics img").on("load", function() {
                $(".all-pics").addClass("show"), 0 != TouchLenght && isTouchDevice ? ($(".full").addClass("pinch-zoom"), $(".pinch-zoom").each(function() {
                    new Pic.PinchZoom($(this), {})
                })) : ($(".full").addClass("dragscroll"), $(".dragscroll").draptouch()), $(".full img").length > 1 && $(".full img").last().remove(), $(".loadicon").fadeOut(400, "linear", function() {
                    0 != TouchLenght && isTouchDevice || detectMargin(), $(".full img").addClass("fadein"), $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
                })
            }), $(".close-pics-small").on("click", function() {
                $(".loadicon").fadeOut(500, function() {
                    $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
                }), $(".full").fadeOut(300, "linear", function() {
                    if ($(".all-pics .full,  .all-pics .pinch-zoom-container").remove(), $(".close-pics-small").remove(), $(".all-pics").removeClass("show"), $(".overlay-dark").removeClass("show"), !$(".house-detail").length && ($("html, body").removeClass("no-scroll"), $(".to-scrollZ").length)) {
                        var e = $(".to-scrollZ").offset().top;
                        $(".to-scrollZ").removeClass("to-scrollZ"), $(window).width() < 1100 && $("html, body").scrollTop(e - 60)
                    }
                })
            })
        }
        return !1
    })
}

function Option() {
    $("a.link-pdf, .library-download a").on("click", function(e) {
        e.preventDefault();
        var t = $(this).attr("href");
        return window.open(t, "_blank"), !1
    }), $(".title-pdf").on("click", function(e) {
        e.preventDefault();
        var t = $(this).find("a").attr("href");
        return window.open(t, "_blank"), !1
    }), $(".view-album, .interior").on("click", function(e) {
        e.preventDefault();
        var t = $(this).attr("data-href");
        return $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $("html, body").addClass("no-scroll"), $(".overlay-dark").addClass("show"), $(".all-album").fadeIn(300, "linear", function() {
            AlbumLoad(t, 0)
        }), !1
    }), $(".zoom.album").on("click", function(e) {
        e.preventDefault(), $(this).parent().addClass("viewalbum");
        var t = $(this).attr("data-href"),
            a = $(this).parent().parent().parent().index();
        return $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $("html, body").addClass("no-scroll"), $(".overlay-dark").addClass("show"), $(".all-album").fadeIn(300, "linear", function() {
            AlbumLoad(t, a)
        }), !1
    }), $("a.player, a.link-video, .degree").on("click", function(e) {
        e.preventDefault(), $(this).parent().addClass("to-scrollV"), $(".library-load").length && $(".library-center").trigger("BTQ.stop");
        var t = $(this).attr("data-href");
        return $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $("html, body").addClass("no-scroll"), $(".overlay-dark").addClass("show"), $(".allvideo").fadeIn(300, "linear", function() {
            VideoLoad(t)
        }), !1
    }), $(".zoom:not(.album),  .zoom-mobile").on("click", function() {
        $("html, body").addClass("no-scroll"), $(".loadicon").hasClass("loader") || ($(".loadicon").show(), $(".loadicon").addClass("loader"), DrawLoad()), $(".all-pics").addClass("show"), $(".all-pics").append('<div class="full"  style="display:block"></div>'), $(".overlay-dark").addClass("show");
        var e = $(this).parent().find("img").attr("src") || $(this).parent().find("img").attr("data-src");
        if ($(this).attr("data-src")) var t = $(this).attr("data-src");
        else var t = e;
        return $(".all-pics").find(".full").append('<img src ="' + t + '" alt="pic" />'), $(".all-pics").find(".full").append("<span></span>"), $("body").append('<a class="close-pics" href="javascript:void(0);"></a>'), $(".all-pics").append('<a class="close-pics-small" href="javascript:void(0);"></a>'), $(".all-pics img").on("load", function() {
            $(".all-pics").addClass("show"), 0 != TouchLenght && isTouchDevice ? ($(".full").addClass("pinch-zoom"), $(".pinch-zoom").each(function() {
                new Pic.PinchZoom($(this), {})
            })) : ($(".full").addClass("dragscroll"), $(".dragscroll").draptouch()), $(".full img").length > 1 && $(".full img").last().remove(), $(".loadicon").fadeOut(400, "linear", function() {
                0 != TouchLenght && isTouchDevice || detectMargin(), $(".full img").addClass("fadein"), $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
            })
        }), $(window).width() > 1100 && $(".full span").on("click", function() {
            $(".close-pics").trigger("click")
        }), $(".close-pics, .close-pics-small").on("click", function() {
            $(".loadicon").fadeOut(500, function() {
                $(".loadicon").removeClass("loader"), $(".loadicon").removeClass("show")
            }), $(".full").fadeOut(300, "linear", function() {
                $(".overlay-dark").removeClass("show"), $(".all-pics .full, .all-pics .text-length, .all-pics .pinch-zoom-container").remove(), $(".close-pics, .close-pics-small").remove(), $(".all-pics").removeClass("show"), $("html, body").removeClass("no-scroll")
            })
        }), !1
    })
}

function turnWheelTouch() {
    doWheel = !0, doTouch = !0
}

function detectBut() {
    if ($("#news-page").length && $(".link-page").hasClass("current") && $(window).width() <= 1100 && $(".news-list").each(function(e, t) {
            var a = $(t),
                o = $(t).find(".grid").offset().left,
                i = $(t).find(".link-page.current").parent().offset().left,
                n = $(".news-list").width() / 2 - $(".grid-item").width() / 2;
            $(a).stop().animate({
                scrollLeft: i - n - o
            }, "slow")
        }), $(window).width() <= 1100 && $(".sub-news").length) {
        var e = $(".sub-news ul").offset().left,
            t = $(".sub-news li.current").offset().left,
            a = $(window).width() / 2 - $(".sub-news li.current").width() / 2;
        $(".sub-news").stop().animate({
            scrollLeft: t - a - e
        }, "slow")
    }
}

function detectMargin() {
    var e = $(".full img").width(),
        t = $(".full  img").height(),
        a = $(window).height(),
        o = $(window).width();
    o > e ? $(".full img").css({
        "margin-left": o / 2 - e / 2
    }) : $(".full img").css({
        "margin-left": 0
    }), a > t ? $(".full img").css({
        "margin-top": a / 2 - t / 2
    }) : $(".full img").css({
        "margin-top": 0
    })
}

function LocationHash() {
    var e = window.location.hash;
    e = e.slice(1), Arrhash = e.split("/"), $(".link-page a[data-name='" + e + "']").trigger("click"), $(".select-box li a[data-year='" + e + "']").trigger("click"), $(".box-nav li a[data-name='" + e + "']").trigger("click"), $(".sub-nav li a[data-name='" + e + "']").trigger("click")
}! function(e) {
    var t = {
        on: e.fn.on,
        bind: e.fn.bind
    };
    e.each(t, function(a) {
        e.fn[a] = function() {
            var e, o = [].slice.call(arguments),
                i = o.pop(),
                n = o.pop();
            return o.push(function() {
                var t = this,
                    a = arguments;
                clearTimeout(e), e = setTimeout(function() {
                    n.apply(t, [].slice.call(a))
                }, i)
            }), t[a].apply(this, isNaN(i) ? arguments : o)
        }
    })
}(jQuery);
var timex, News = 0,
    Details = 0,
    Videoload = 0,
    doWheel = !0,
    doTouch = !0,
    Arrhash, windscroll = $(document).scrollTop(),
    Itemx = $(".nav li, .grid-item, .space span"),
    timer, timer2, supportsVideo = !!document.createElement("video").canPlayType,
    ThisVideo = document.getElementById("video-full");
$(document).ready(function() {
    $(document).bind("scroll", function() {
        var e = $(document).scrollTop();
        $(window).width() <= 1100 && (e > 50 ? ($(".scroll-down").fadeOut(500, "linear"), $(".slogan").addClass("hide")) : ($(".scroll-down").fadeIn(500, "linear"), $(".slogan").removeClass("hide")), e > $(window).height() / 2 ? $(".go-top").css({
            display: "block",
            opacity: 1
        }) : $(".go-top").css({
            display: "none",
            opacity: 0
        }), windscroll = e)
    }), document.addEventListener("keydown", function(e) {
        var t = e.keyCode || e.which;
        38 === t && $(".box-nav li.active").prev().trigger("click"), 40 === t && $(".box-nav li.active").next().trigger("click")
    }), $(".go-top").on("click", function() {
        $("html, body").animate({
            scrollTop: 0
        }, "slow")
    })
}), window.onorientationchange = ResizeWindows, $(window).on("orientationchange", function() {
    $(window).width() <= 1100 && (ScrollHoz(), $("#news-page").length && detectBut())
}), $(window).resize(function() {
    $(window).width() > 1100 && $(".news-text img,  .box-location img").hasClass("zoom-pic") && $(".close-pics-small").trigger("click"), ScrollNiceHide(), ResizeWindows()
}), $(window).on("resize", function() {
    if (ResizeWindows(), $(window).width() > 1100) {
        if ($(".dragscroll").length && (detectMargin(), $(".dragscroll").draptouch()), $("#home-page").length && ($(".group-central").hasClass("show-text") || SlidePicture()), $("#about-page").length && ($(".group-central").hasClass("show-text") || BoxSlide()), $("#library-page").length && ($(".group-central").hasClass("show-text") || BoxSlide()), $("#location-page").length && (ScaleMap(), $(".viewer").hasClass("desktop") || ZoomMap()), $("#contact-page, #product-page,#product-details-page, #location-page").length) {
            if ($(".item-active").length) {
                var e = $(".slide-bg")[0].swiper;
                e.onResize()
            } else SlidePicture();
            $("img.map").hasClass("area") || $(".map-background").length || $(".map").maphilight()
        }
        if ($("#news-page").length && !$(".grid").hasClass("arrange")) {
            var t = $(".grid");
            t.isotope({
                itemSelector: ".grid-item",
                percentPosition: !0,
                transitionDuration: "0s"
            }), $(".grid").addClass("arrange")
        }
        $("#facilities-page,#product-page, #location-page").length && ($(".sub-nav li").hasClass("current") ? $(".sub-nav li.current").trigger("click") : $(".sub-nav li:first-child ").trigger("click")), $("#product-details-page").length && ($(".sub-product li").hasClass("current") ? $(".sub-product li.current").trigger("click") : $(".sub-product li:first-child ").trigger("click")), $(".news-list,  .sub-news").hasClass("dragscroll") && ($(".news-list, .sub-news").removeClass("dragscroll draptouch-active draptouch-moving-left draptouch-moving-down"), $(".news-list, .sub-news").css({
            overflow: "visible"
        })), $(".news-list").hasClass("hide") ? setTimeout(function() {
            ScrollNiceC()
        }, 250) : $(".scrollA, .scrollB").length && setTimeout(function() {
            ScrollNiceA(), ScrollNiceB()
        }, 250), $(".box-pic, .content-extra").hasClass("moving") || MoveBackground()
    } else {
        if ($("#home-page").length) {
            var a = $(".slide-pics")[0].swiper;
            a.slideNext(), a.startAutoplay()
        }
        if ($("#contact-page, #product-page,#product-details-page, #location-page").length) {
            if ($(".item-active").length) {
                var e = $(".slide-bg")[0].swiper;
                e.destroy(!0, !0)
            }
            $("img.map").hasClass("area") && $(".map").removeClass("area")
        }
        if ($("#news-page").length) {
            if ($(".grid").hasClass("arrange")) {
                var t = $(".grid");
                t.isotope("destroy"), $(".grid").removeClass("arrange")
            }
            $(".colum-box-news").hasClass("show") || $(".news-list").each(function(e, t) {
                $(".link-page.current").length ? $(t).find(".link-page.current").trigger("click") : $(t).find(".grid-item:first-child .link-page").trigger("click")
            })
        }
        $(".box-pic, .content-extra").hasClass("moving") && $(".box-pic, .content-extra").removeClass("moving"), 0 != TouchLenght && isTouchDevice || (ScrollHoz(), $("#news-page").length && detectBut())
    }
    setTimeout(function() {
        Check()
    }, 500)
}, 250), $(window).bind("popstate", function(e) {
    $(window).width() > 1100 && e.preventDefault();
    var t = $(".httpserver").text();
    if ($(window).width() > 1100)
        if (null !== e.originalEvent.state) {
            var a = e.originalEvent.state.path,
                o = e.originalEvent.state.dataName,
                i = e.originalEvent.state.title,
                n = document.URL;
            changeUrl(a, i, "", "", o, "", "");
            var l = a.replace(t, "");
            l.split("/");
            $("#news-page").length && ($('#news-page[data-news="progress"]').length ? ($(".close-album").length && $(".close-album").trigger("click"), $(".nav li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            }), $(".sub-news li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            }), $(".select-box li a").each(function(e, t) {
                $(t).attr("href") == a && $(t).trigger("click")
            })) : ($(".news-content .news-text").length ? $(".close-news").trigger("click") : ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            }), $(".sub-news li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            })), $(".link-page a").each(function(e, t) {
                $(t).attr("href") == n && $(t).trigger("click")
            }))), $("#about-page").length && ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            }), $(".box-nav li a").each(function(e, t) {
                $(t).attr("href") == a && $(t).trigger("click")
            })), $("#location-page, #contact-page").length && ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            }), $(".sub-nav li a").each(function(e, t) {
                $(t).attr("href") == a && $(t).trigger("click")
            })), $("#product-page").length && ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            }), $(".sub-nav li a").each(function(e, t) {
                $(t).attr("href") == a && $(t).trigger("click")
            })), $("#product-details-page").length && ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            }), $(".sub-product li a").each(function(e, t) {
                $(t).attr("href") == a && $(t).trigger("click")
            })), $("#library-page").length && ($(".close-video").length && $(".close-video").trigger("click"), $(".close-album").length && $(".close-album").trigger("click"), $(".nav li a").each(function(e, t) {
                $(t).attr("href") == a && window.history.back()
            }), $(".box-nav li a").each(function(e, t) {
                $(t).attr("href") == a && $(t).parent().trigger("click")
            }))
        } else {
            var n = document.URL,
                l = n.replace(t, "");
            l.split("/");
            $("#news-page").length && ($('#news-page[data-news="progress"]').length ? ($(".close-album").length && $(".close-album").trigger("click"), $(".nav li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            }), $(".sub-news li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            }), $(".select-box li a").each(function(e, t) {
                $(t).attr("href") == n && $(t).trigger("click")
            })) : ($(".news-content .news-text").length ? $(".close-news").trigger("click") : ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            }), $(".sub-news li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            })), $(".link-page a").each(function(e, t) {
                $(t).attr("href") == n && $(t).trigger("click")
            }))), $("#about-page").length && ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            }), $(".box-nav li a").each(function(e, t) {
                $(t).attr("href") == n && $(t).trigger("click")
            })), $("#location-page, #contact-page").length && ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            }), $(".sub-nav li a").each(function(e, t) {
                $(t).attr("href") == n && $(t).trigger("click")
            })), $("#product-page").length && ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            }), $(".sub-nav li a").each(function(e, t) {
                $(t).attr("href") == n && $(t).trigger("click")
            })), $("#product-details-page").length && ($(".nav li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            }), $(".sub-product li a").each(function(e, t) {
                $(t).attr("href") == n && $(t).trigger("click")
            })), $("#library-page").length && ($(".close-video").length && $(".close-video").trigger("click"), $(".close-album").length && $(".close-album").trigger("click"), $(".nav  li a").each(function(e, t) {
                $(t).attr("href") == n && window.history.back()
            }), $(".box-nav li a").each(function(e, t) {
                $(t).attr("href") == n && $(t).parent().trigger("click")
            }))
        }
    else {
        if (null !== e.originalEvent.state) var a = e.originalEvent.state.path;
        else var a = document.URL;
        var l = a.replace(t, "");
        l.split("/");
        $("#news-page").length && ($('#news-page[data-news="progress"]').length ? ($(".close-album").length && $(".close-album").trigger("click"), $(".nav li a").each(function(e, t) {
            $(t).attr("href") == a && window.history.back()
        }), $(".sub-news li a").each(function(e, t) {
            $(t).attr("href") == a && window.history.back()
        }), $(".select-box li a").each(function(e, t) {
            $(t).attr("href") == a && location.reload()
        })) : ($(".nav li a").each(function(e, t) {
            $(t).attr("href") == a && window.history.back()
        }), $(".sub-news li a").each(function(e, t) {
            $(t).attr("href") == a && window.history.back()
        }), $(".link-page a").each(function(e, t) {
            $(t).attr("href") == a && $(t).trigger("click")
        }))), $("#library-page").length && ($(".close-video").length && $(".close-video").trigger("click"), $(".close-album").length && $(".close-album").trigger("click"), $(".nav li a").each(function(e, t) {
            $(t).attr("href") == a
        }), $(".box-nav li a").each(function(e, t) {
            $(t).attr("href") == a && location.reload()
        })), $("#product-page").length && ($(".nav li a").each(function(e, t) {
            $(t).attr("href") == a && window.history.back()
        }), $(".sub-nav li a").each(function(e, t) {
            $(t).attr("href") == a && location.reload()
        })), $("#product-details-page").length && ($(".nav li a").each(function(e, t) {
            $(t).attr("href") == a && window.history.back()
        }), $(".sub-product li a").each(function(e, t) {
            $(t).attr("href") == a && location.reload()
        }))
    }
}), iOS && $(window).bind("pageshow", function(e) {
    e.originalEvent.persisted && window.location.reload()
});