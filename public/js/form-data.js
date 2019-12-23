$("form.form-ajax-custom").each(function() {
    var $form = $(this),
        $submit = $("*[type=submit]", $form),
        $inputs = $("input, select, textarea, button", $form),
        $alerts = $form.parent().find(".alerts .alert"),
        $alertSuccess = $alerts.filter(".alert-success"),
        $alertErrors = $alerts.filter(".alert-error"),
        $fieldWraps = $(".field-wrap", $form),
        $fieldErrors = $(".text-error", $fieldWraps);
    $form.on("submit", function(e) {
        e.preventDefault();
        var action = $form.attr("action"),
            method = $form.attr("method"),
            params = helper.formArrayToObject($form.serializeArray());
        $submit.button("loading"), $inputs.prop("disabled", !0), $alerts.html("").hide().addClass("hidden"), $fieldWraps.removeClass("error"), $fieldErrors.text("").addClass("hidden"), $.ajax({
            url: action,
            type: method,
            data: params,
            dataType: "json"
        }).done(function(data) {
            if (data.debug && console.log(data.debug), data.message && alert(data.message), data.success && $alertSuccess.html("<div>" + data.success + "</div>").show().removeClass("hidden"), data.error && $alertErrors.html("<div>" + data.error + "</div>").show().removeClass("hidden"), data.errors) {
                for (var errorsHtml = "", i = 0; i < data.errors.length; i++) errorsHtml += "<div>" + data.errors[i] + "</div>";
                $alertErrors.html(errorsHtml).show().removeClass("hidden")
            }
            if (data.validationErrors)
                for (var j = 0; j < data.validationErrors.length; j++) {
                    var err = data.validationErrors[j],
                        errText = _.isObject(err) && err.msg ? err.msg : null,
                        errField = _.isObject(err) && err.param ? err.param : null;
                    if (null !== errText && null !== errField) {
                        var $fieldWrap = $fieldWraps.filter('[data-field="' + errField + '"]');
                        $fieldWrap.addClass("error"), $(".text-error", $fieldWrap).text(errText).removeClass("hidden")
                    }
                }
            if (data.redirect && (document.location = data.redirect), data.formReset && $form.get(0).reset(), data.formHide && $form.hide().addClass("hidden"), data.event) {
                var eventData = data.eventData || {};
                $form.trigger(data.event, eventData)
            }
        }).fail(function() {
            alert("Unexpected server error")
        }).always(function() {
            $submit.button("reset"), $inputs.filter(":not([data-disabled=1],[data-disabled=true])").prop("disabled", !1)
        })
    }), $form.on("popup.reset", function() {
        $form.data("persist") !== !0 && ($form.data("fields-persist") || $form.show().removeClass("hidden").get(0).reset(), $alerts.html("").hide().addClass("hidden"), $inputs.filter(":not([data-disabled=1],[data-disabled=true])").prop("disabled", !1), $fieldWraps.removeClass("error"), $fieldErrors.text("").addClass("hidden"), $submit.button("reset"))
    }), $form.on("popup.close", function() {
        $form.trigger("popup.reset")
    }), $form.on("popup.open", function() {
        $form.trigger("popup.reset")
    })