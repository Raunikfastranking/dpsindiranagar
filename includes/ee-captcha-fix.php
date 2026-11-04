<?php
/**
 * ExtraaEdge captcha reload fix.
 *
 * Upstream refreshCaptcha() does:
 *   ctx = canvas.getContext("2d"); generateCaptcha(ctx);
 * and then reads ctx.width / ctx.height (always undefined on a 2D context),
 * so strokeText uses NaN coords and the visible captcha never updates.
 *
 * We intercept the refresh click and redraw on the real canvas element,
 * also updating the widget instance's catchaText used for validation.
 */
?>
<script>
(function () {
    if (window.__dpsEeCaptchaFixBound) return;
    window.__dpsEeCaptchaFixBound = true;

    function redrawCaptcha(ref, canvas) {
        if (!ref || !canvas) return;
        var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var text = "";
        for (var i = 0; i < 4; i++) {
            text += chars.charAt(Math.floor(Math.random() * 62));
        }
        ref.catchaText = text;

        var ctx = canvas.getContext("2d");
        var w = canvas.width || 98;
        var h = canvas.height || 30;
        ctx.clearRect(0, 0, w, h);
        ctx.font = "18px Georgia";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.strokeStyle = "#000";
        ctx.strokeText(text, w / 2, h / 2);
    }

    document.addEventListener("click", function (ev) {
        var target = ev.target;
        if (!target || !target.closest) return;

        var refreshWrap = target.closest(".refreshButtonContainer, .refreshBtn");
        if (!refreshWrap) return;

        var captchaBox = refreshWrap.closest(".captchaContainer");
        if (!captchaBox) return;

        var canvas = captchaBox.querySelector("canvas");
        if (!canvas) return;

        var btn = refreshWrap.classList.contains("refreshBtn")
            ? refreshWrap
            : refreshWrap.querySelector(".refreshBtn");

        var ref = null;
        if (btn && window.jQuery) {
            ref = window.jQuery(btn).data("classRef") || null;
        }
        if (!ref && btn && btn._classRef) {
            ref = btn._classRef;
        }

        // Stop ExtraaEdge's broken refresh handler
        ev.preventDefault();
        ev.stopImmediatePropagation();

        if (ref) {
            redrawCaptcha(ref, canvas);
            return;
        }

        // Fallback if classRef not available: still redraw visually
        // (validation may fail until widget exposes ref — rare)
        var chars = "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
        var text = "";
        for (var i = 0; i < 4; i++) {
            text += chars.charAt(Math.floor(Math.random() * 62));
        }
        var ctx = canvas.getContext("2d");
        var w = canvas.width || 98;
        var h = canvas.height || 30;
        ctx.clearRect(0, 0, w, h);
        ctx.font = "18px Georgia";
        ctx.textAlign = "center";
        ctx.textBaseline = "middle";
        ctx.strokeStyle = "#000";
        ctx.strokeText(text, w / 2, h / 2);
        canvas.setAttribute("data-captcha-text", text);
    }, true);
})();
</script>
