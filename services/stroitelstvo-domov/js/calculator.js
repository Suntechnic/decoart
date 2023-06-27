$(document).ready(function(){
        $('.container .link').click(function(){
            $('.container ul').toggleClass('hide');
            if ($('.container ul').hasClass('hide')) {
                $('.container .link').html('Скрыть');
            } else {
                $('.container .link').html('Читать далее');
            }
            return false;
        });
    });

    function updateToolTip() {
        $("#num").val($("#range").roundSlider("option", "value"));
    }
    $(function() {
        $("#range").roundSlider({
            sliderType: "min-range",
            value: 100,
            min : 50,
            max: 400,
            step : 1,
            width: 40,
            radius : 165,
            showTooltip: true,
            editableTooltip: true,
            drag: updateToolTip,
            change: updateToolTip
        });
        $("#num").val($("#range").roundSlider("option", "value"));
        $("#num").change(function() {
            $("#range").roundSlider("option", "value", $(this).val());
        });
        jQuery("#range,#num,#num1,#num2,#num3,#num4,#num5,#num6,#num7,#num8,#num9,#num10,#num11,#num12").on("change", function (e) {
            var item1 = jQuery("#num").val();
            var item2 = jQuery("#num1").attr('data-value');
            var item3 = jQuery("#num2").attr('data-value');
            var item4 = jQuery("#num3").attr('data-value');
            var item5 = jQuery("#num4").attr('data-value');
            var item6 = jQuery("#num5").attr('data-value');
            var item7 = jQuery("#num6").attr('data-value');
            var item8 = jQuery("#num7").attr('data-value');
            var item9 = jQuery("#num8").attr('data-value');
            var item10 = jQuery("#num9").attr('data-value');
            var item11 = jQuery("#num10").attr('data-value');
            var item12 = jQuery("#num11").attr('data-value');
            var item13 = jQuery("#num12").attr('data-value');
            var col = Number(item1) * Number(item2);
            var col1 = Number(item1) * Number(item3);
            var col2 = Number(item1) * Number(item4);
            var col3 = Number(item1) * Number(item5);
            var col4 = Number(item1) * Number(item6);
            var col5 = Number(item1) * Number(item7);
            var col6 = Number(item1) * Number(item8);
            var col7 = Number(item1) * Number(item9);
            var col8 = Number(item1) * Number(item10);
            var col9 = Number(item1) * Number(item11);
            var col10 = Number(item1) * Number(item12);
            var col11 = Number(item1) * Number(item13);
            var total = col;
            var total1 = col1;
            var total2 = col2;
            var total3 = col3;
            var total4 = col4;
            var total5 = col5;
            var total6 = col6;
            var total7 = col7;
            var total8 = col8;
            var total9 = col9;
            var total10 = col10;
            var total11 = col11;
            totalnumber = jQuery("#sum-1");
            totalnumber1 = jQuery("#sum-2");
            totalnumber2 = jQuery("#sum-3");
            totalnumber3 = jQuery("#sum-4");
            totalnumber4 = jQuery("#sum-5");
            totalnumber5 = jQuery("#sum-6");
            totalnumber6 = jQuery("#sum-7");
            totalnumber7 = jQuery("#sum-8");
            totalnumber8 = jQuery("#sum-9");
            totalnumber9 = jQuery("#sum-10");
            totalnumber10 = jQuery("#sum-11");
            totalnumber11 = jQuery("#sum-12");
            var countTo = total;
            var count1To = total1;
            var count2To = total2;
            var count3To = total3;
            var count4To = total4;
            var count5To = total5;
            var count6To = total6;
            var count7To = total7;
            var count8To = total8;
            var count9To = total9;
            var count10To = total10;
            var count11To = total11;
            if (isNaN(total)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-1").val("0");
            } else {
                    jQuery({countNum: totalnumber.val()}).animate(
                        {
                            countNum: countTo
                        },
                        {
                            duration: 1000,
                            easing: "linear",
                            step: function () {
                                totalnumber.val(Math.ceil(this.countNum) + ' ₽');
                            },
                            complete: function () {
                                totalnumber.val((this.countNum).toLocaleString('ru') + ' ₽');
                            }
                        }
                    );
            };
            if (isNaN(total1)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-2").val("0");
            } else {
                jQuery({count1Num: totalnumber1.val()}).animate(
                    {
                        count1Num: count1To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber1.val(Math.ceil(this.count1Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber1.val((this.count1Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total2)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-3").val("0");
            } else {
                jQuery({count2Num: totalnumber2.val()}).animate(
                    {
                        count2Num: count2To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber2.val(Math.ceil(this.count2Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber2.val((this.count2Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total3)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-4").val("0");
            } else {
                jQuery({count3Num: totalnumber3.val()}).animate(
                    {
                        count3Num: count3To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber3.val(Math.ceil(this.count3Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber3.val((this.count3Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total4)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-5").val("0");
            } else {
                jQuery({count4Num: totalnumber4.val()}).animate(
                    {
                        count4Num: count4To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber4.val(Math.ceil(this.count4Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber4.val((this.count4Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total5)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-6").val("0");
            } else {
                jQuery({count5Num: totalnumber5.val()}).animate(
                    {
                        count5Num: count5To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber5.val(Math.ceil(this.count5Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber5.val((this.count5Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total6)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-7").val("0");
            } else {
                jQuery({count6Num: totalnumber6.val()}).animate(
                    {
                        count6Num: count6To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber6.val(Math.ceil(this.count6Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber6.val((this.count6Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total7)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-8").val("0");
            } else {
                jQuery({count7Num: totalnumber7.val()}).animate(
                    {
                        count7Num: count7To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber7.val(Math.ceil(this.count7Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber7.val((this.count7Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total8)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-9").val("0");
            } else {
                jQuery({count8Num: totalnumber8.val()}).animate(
                    {
                        count8Num: count8To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber8.val(Math.ceil(this.count8Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber8.val((this.count8Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total9)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-10").val("0");
            } else {
                jQuery({count9Num: totalnumber9.val()}).animate(
                    {
                        count9Num: count9To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber9.val(Math.ceil(this.count9Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber9.val((this.count9Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total10)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-11").val("0");
            } else {
                jQuery({count10Num: totalnumber10.val()}).animate(
                    {
                        count10Num: count10To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber10.val(Math.ceil(this.count10Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber10.val((this.count10Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
            if (isNaN(total11)) {
                alert("Необходимо вводить только числа");
                jQuery("#sum-12").val("0");
            } else {
                jQuery({count11Num: totalnumber11.val()}).animate(
                    {
                        count11Num: count11To
                    },
                    {
                        duration: 1000,
                        easing: "linear",
                        step: function () {
                            totalnumber11.val(Math.ceil(this.count11Num) + ' ₽');
                        },
                        complete: function () {
                            totalnumber11.val((this.count11Num).toLocaleString('ru') + ' ₽');
                        }
                    }
                );
            };
        });
    });
    jQuery(".calculation .btn").click(function() {
        jQuery('html, body').animate({
            scrollTop: jQuery("#fors").offset().top
        }, 1500);
    });