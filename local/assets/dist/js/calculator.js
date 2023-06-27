function openTab (cityName) {
    
    // выключаем все вкладки
    var tabcontents = document.querySelectorAll(".tabcontent");
    tabcontents.forEach((tabcontent) => {
        tabcontent.style.display = "none";
    });
    var tablinks = document.querySelectorAll(".tablinks.active");
    tablinks.forEach((tablinks) => {
        tablinks.classList.remove("active");
    });
    
    // активируем целевую
    document.querySelector('.tabcontent[name="'+cityName+'"]').style.display = "block";
    document.querySelector('.tablinks[name="'+cityName+'"]').classList.add("active");
    
}
var cutTabName = document.location.hash.slice(1);
if (!cutTabName) {
    cutTabName = document.querySelector(".tabcontent").getAttribute('name');
}
openTab(cutTabName);

window.addEventListener("hashchange", function(e) {
  var cutTabName = document.location.hash.slice(1);
  openTab(cutTabName);
}, false);



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



function recalcTotalBuildSum () {
    let sumBuildTotal =  parseInt(jQuery("#sum-7").val().replace(/[^\d]/g, ''));
    if (jQuery('[name="sumBuidlEngAdd"]').is(':checked')) {
        sumBuildTotal = sumBuildTotal+parseInt(jQuery("#sum-8").text().replace(/[^\d]/g, ''));
    }
    if (jQuery('[name="sumBuidlFinishAdd"]').is(':checked')) {
        sumBuildTotal = sumBuildTotal+parseInt(jQuery("#sum-9").text().replace(/[^\d]/g, ''));
    }
    jQuery("#sum-build-total").html(sumBuildTotal.toLocaleString('ru') + ' ₽');
}


function openMenuSlideBar (id) {
    document.querySelector('.moclients-sidebar__item[data-id="'+id+'"]').click();
    return false;
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

	var bol = Number(item1) * Number(item2) * 1.3;
	var bol1 = Number(item1) * Number(item3) * 1.3;
        var bol2 = Number(item1) * Number(item4) * 1.3;
        var bol3 = Number(item1) * Number(item5) * 1.3;
        var bol4 = Number(item1) * Number(item6) * 1.3;
        var bol5 = Number(item1) * Number(item7) * 1.3;
        var bol6 = Number(item1) * Number(item8) * 1.3;
        var bol7 = Number(item1) * Number(item9) * 1.3;
        var bol8 = Number(item1) * Number(item10) * 1.3;
        var bol9 = Number(item1) * Number(item11) * 1.3;
        var bol10 = Number(item1) * Number(item12) * 1.3;
        var bol11 = Number(item1) * Number(item13) * 1.3;

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
	
	var total12 = bol;
	var total13 = bol1;
	var total14 = bol2;
	var total15 = bol3;
	var total16 = bol4;
	var total17 = bol5;
	var total18 = bol6;
	var total19 = bol7;
	var total20 = bol8;
	var total21 = bol9;
	var total22 = bol10;
	var total23 = bol11;
        
        let totalnumber = jQuery("#sum-1");
        let totalnumber1 = jQuery("#sum-2");
        let totalnumber2 = jQuery("#sum-3");
        let totalnumber3 = jQuery("#sum-4");
        let totalnumber4 = jQuery("#sum-5");
        let totalnumber5 = jQuery("#sum-6");
        let totalnumber6 = jQuery("#sum-7");
        let totalnumber7 = jQuery("#sum-8");
        let totalnumber8 = jQuery("#sum-9");
        let totalnumber9 = jQuery("#sum-10");
        let totalnumber10 = jQuery("#sum-11");
        let totalnumber11 = jQuery("#sum-12");

        
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
	
	var count12To = total12;
	var count13To = total13;
	var count14To = total14;
	var count15To = total15;
	var count16To = total16;
	var count17To = total17;
	var count18To = total18;
	var count19To = total19;
	var count20To = total20;
	var count21To = total21;
	var count22To = total22;
	var count23To = total23;

        if (isNaN(total)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-1").val("0");
        } else {
            if(Number(item1) < '100') {
                    jQuery({countNum: totalnumber.val()}).animate(
                        {
                            countNum: count12To
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
                }else{
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
                }
        };
        if (isNaN(total1)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-2").val("0");
        } else {
	if(Number(item1) < '100') {
                    jQuery({count1Num: totalnumber1.val()}).animate(
                        {
                            count1Num: count13To
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
                }else{
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
		}
        };
        if (isNaN(total2)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-3").val("0");
        } else {
	if(Number(item1) < '100') {
                    jQuery({count2Num: totalnumber2.val()}).animate(
                        {
                            count2Num: count14To
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
                }else{
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
		}
        };
        if (isNaN(total3)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-4").val("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count3Num: totalnumber3.val()}).animate(
                        {
                            count3Num: count15To
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
                }else{
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
		}
        };
        if (isNaN(total4)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-5").val("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count4Num: totalnumber4.val()}).animate(
                        {
                            count4Num: count16To
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
                }else{
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
		}
        };
        if (isNaN(total5)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-6").val("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count5Num: totalnumber5.val()}).animate(
                        {
                            count5Num: count17To
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
                }else{
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
		}
        };
        if (isNaN(total6)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-7").val("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count6Num: totalnumber6.val()}).animate(
                        {
                            count6Num: count18To
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
                }else{
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
                        recalcTotalBuildSum();
                    }
                }
            );
		}
        };
        if (isNaN(total7)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-8").text("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count7Num: totalnumber7.val()}).animate(
                        {
                            count7Num: count19To
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
                }else{
            jQuery({count7Num: totalnumber7.text()}).animate(
                {
                    count7Num: count7To
                },
                {
                    duration: 1000,
                    easing: "linear",
                    step: function () {
                        totalnumber7.text(Math.ceil(this.count7Num) + ' ₽');
                    },
                    complete: function () {
                        totalnumber7.text((this.count7Num).toLocaleString('ru') + ' ₽');
                        recalcTotalBuildSum();
                    }
                }
            );
	}
        };
        if (isNaN(total8)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-9").text("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count8Num: totalnumber8.val()}).animate(
                        {
                            count8Num: count20To
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
                }else{
            jQuery({count8Num: totalnumber8.text()}).animate(
                {
                    count8Num: count8To
                },
                {
                    duration: 1000,
                    easing: "linear",
                    step: function () {
                        totalnumber8.text(Math.ceil(this.count8Num) + ' ₽');
                    },
                    complete: function () {
                        totalnumber8.text((this.count8Num).toLocaleString('ru') + ' ₽');
                        recalcTotalBuildSum();
                    }
                }
            );
		}
        };
        if (isNaN(total9)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-10").val("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count9Num: totalnumber9.val()}).animate(
                        {
                            count9Num: count21To
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
                }else{
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
		}
        };
        if (isNaN(total10)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-11").val("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count10Num: totalnumber10.val()}).animate(
                        {
                            count10Num: count22To
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
                }else{
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
		}
        };
        if (isNaN(total11)) {
            alert("Необходимо вводить только числа");
            jQuery("#sum-12").val("0");
        } else {
		if(Number(item1) < '100') {
                    jQuery({count11Num: totalnumber11.val()}).animate(
                        {
                            count11Num: count23To
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
                }else{
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
        
        }
        console.log(totalnumber6.val(),totalnumber7,totalnumber8);
    });
});
$('.select').each(function() {
    const _this = $(this),
        selectOption = _this.find('option'),
        selectOptionLength = selectOption.length,
        selectedOption = selectOption.filter(':selected'),
        duration = 450; // длительность анимации 

    _this.hide();
    _this.wrap('<div class="select"></div>');
    $('<div>', {
        class: 'new-select',
        text: _this.children('option:disabled').text()
    }).insertAfter(_this);

    const selectHead = _this.next('.new-select');
    $('<div>', {
        class: 'new-select__list'
    }).insertAfter(selectHead);

    const selectList = selectHead.next('.new-select__list');
    for (let i = 1; i < selectOptionLength; i++) {
        $('<div>', {
            class: 'new-select__item',
            html: $('<span>', {
                text: selectOption.eq(i).text()
            })
        })
        .attr('data-value', selectOption.eq(i).val())
        .appendTo(selectList);
    }

    const selectItem = selectList.find('.new-select__item');
    selectList.slideUp(0);
    selectHead.on('click', function() {
        if ( !$(this).hasClass('on') ) {
            $(this).addClass('on');
            selectList.slideDown(duration);

            selectItem.on('click', function() {
                let chooseItem = $(this).data('value');

                $('select').val(chooseItem).attr('selected', 'selected');
                selectHead.text( $(this).find('span').text() );

                selectList.slideUp(duration);
                selectHead.removeClass('on');
            });

        } else {
            $(this).removeClass('on');
            selectList.slideUp(duration);
        }
    });
});


//
//jQuery(".calculation .btn").click(function() {
//    jQuery('html, body').animate({
//        scrollTop: jQuery("#fors").offset().top
//    }, 1500);
//});