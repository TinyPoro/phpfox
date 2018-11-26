
$Ready(function() {
    if(typeof calendar_image !== "undefined")
    {
        coreSubscriptionsAutoload.datePicker();
    }
    if(typeof isBESubscription  !== "undefined")
    {
        coreSubscriptionsAutoload.processSubscriptionBE();
    }
    if($('.core-subscriptions-admincp-list').length)
    {
        $('.core-subscriptions-admincp-list .user_profile_link_span a').attr('target','_blank');
        coreSubscriptionsAutoload.initStatisticTitle();
    }
    if($('.core-subscription-renew-payment-method').length)
    {
        coreSubscriptionsAutoload.selectRenewMethod();
    }
    if($('.membership-package-content-js').length) {
        $('.membership-package-content-js').masonry({
            itemSelector: '.membership-package__item',
            columnWidth: '.membership-package__item',
            percentPosition: true
        });
    }
    if($('.core-subscriptions-manage-packages').length)
    {
        if(!$('body').hasClass('subscribe-admincp-index'))
        {
            $('body').addClass('subscribe-admincp-index');
        }

    }
});


var coreSubscriptionsAutoload = {
    datePicker: function () {
        $( "#date-from" ).datepicker({
            showOn: "button",
            buttonImage: calendar_image,
            buttonImageOnly: true,
            buttonText: "Select date"
        });

        $( "#date-to" ).datepicker({
            showOn: "button",
            buttonImage: calendar_image,
            buttonImageOnly: true,
            buttonText: "Select date"
        });
        $('#period').on('change',function () {
            var val = $(this).val();
            if(val != "custom")
            {
                coreSubscriptionsAutoload.checkClass($('.date-filter'),'show','hidden');
                $('#date-from').val('');
                $('#date-to').val('');
            }
            else
            {
                coreSubscriptionsAutoload.checkClass($('.date-filter'),'hidden','show');
            }
        });

        if($('#period').val() == "custom")
        {
            coreSubscriptionsAutoload.checkClass($('.date-filter'),'hidden','show');
        }
    },
    processSubscriptionBE: function () {
        $('#status').on('change', function () {
            var value = $(this).val();
            var period = $('#period').val();
            if(value == "" || value == "completed")
            {
                $('#title-statistic').html('Activation Date');
                if(period == "custom")
                {
                    coreSubscriptionsAutoload.checkClass($('.date-filter'),'hidden','show');
                }
                coreSubscriptionsAutoload.checkClass($('.period'),'hidden','show');
                coreSubscriptionsAutoload.processReasonDropdown(false);

            }
            else if(value == "expire")
            {
                $('#title-statistic').html('Expiration Date');
                if(period == "custom")
                {
                    coreSubscriptionsAutoload.checkClass($('.date-filter'),'hidden','show');
                }

                coreSubscriptionsAutoload.checkClass($('.period'),'hidden','show');
                coreSubscriptionsAutoload.processReasonDropdown(false);
            }
            else if(value == "cancel")
            {
                $('#title-statistic').html('Cancelation Date');
                if(period == "custom")
                {
                    coreSubscriptionsAutoload.checkClass($('.date-filter'),'hidden','show');
                }
                coreSubscriptionsAutoload.checkClass($('.period'),'hidden','show');
                coreSubscriptionsAutoload.processReasonDropdown(true);
            }
            else
            {
                $('#period').val('');
                $('#date-from').val('');
                $('#date-to').val('');

                coreSubscriptionsAutoload.checkClass($('.date-filter'),'show','hidden');
                coreSubscriptionsAutoload.checkClass($('.period'),'show','hide');
                coreSubscriptionsAutoload.processReasonDropdown(false);
            }
        });
        var btnAdd = $('.toolbar-top .btn-group').find('a.popup');
        if (btnAdd.length) {
            btnAdd.removeClass('popup');
        }
        if($('#status').val() == 'cancel')
        {
            coreSubscriptionsAutoload.processReasonDropdown(true);
        }
    },
    checkClass: function (oObj, sRemoveClass, sAddClass) {
        if(oObj.hasClass(sRemoveClass))
        {
            oObj.removeClass(sRemoveClass);
        }
        if(!empty(sAddClass))
        {
            oObj.addClass(sAddClass);
        }
    },
    processReasonDropdown: function(isShow){
        if($('.js_subscribe_reason').length)
        {
            if(isShow)
            {
                coreSubscriptionsAutoload.checkClass($('.js_subscribe_reason'),'hidden','show');
            }
            else
            {
                coreSubscriptionsAutoload.checkClass($('.js_subscribe_reason'),'show','hidden');
                $('#reason').val('');
            }
        }
    },
    initStatisticTitle: function () {
            var value = $('#status').val();
            if(value == "" || value == "completed")
            {
                $('#title-statistic').html('Activation Date');
            }
            else if(value == "expire")
            {
                $('#title-statistic').html('Expiration Date');
            }
            else if(value == "cancel")
            {
                $('#title-statistic').html('Cancelation Date');
            }
    },
    selectRenewMethod: function() {
        $('#js_renew_method_action').on('click', function () {
            var iPurchaseId = $('#js_subscription_id').val();
            var sRedirectUrl = $('#js_subscription_redirect_url').val();
            var renew = $('input[name=core-subscription-renew-method]:checked').val();
            window.location.href = sRedirectUrl + '?id=' + iPurchaseId + '&renew_method=' + renew;
        });
    }
};