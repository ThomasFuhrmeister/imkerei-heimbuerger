function next (){
    var imgs = $("#meinFader img");
    var size = imgs.length;

    var selector = getSelector(size);
    var selectorActual = selector.selectorActual;
    var selectorNext = selector.selectorNext;

    $(selectorActual).removeClass("actual").addClass('next');
    $(selectorNext).removeClass("next").addClass('actual');
}
function previous () {
    var imgs = $("#meinFader img");
    var size = imgs.length;

    var selector = getSelector(size);
    var selectorActual = selector.selectorActual;
    var selectorPrevious = selector.selectorPrevious;

    $(selectorActual).removeClass("actual").addClass('next');
    $(selectorPrevious).removeClass("next").addClass('actual');
}
function getSelector (size) {

    for ( var i = 1; i < size+1; i++) {
        selectorActual = "#meinFader img:nth-child(" + i + ")";
        selectorNext = "#meinFader img:nth-child(" + (i+1) + ")";
        selectorPrevious = "#meinFader img:nth-child(" + (i-1) + ")";
        if ( i == size) {
            selectorNext = "#meinFader img:nth-child(1)";
        }
        if ( i == 1) {
            selectorPrevious = "#meinFader img:nth-child(" + (size) + ")";
        }
        if ($(selectorActual).hasClass("actual")){
            return {
                selectorActual: selectorActual,
                selectorNext: selectorNext,
                selectorPrevious: selectorPrevious
            }
        }
    }
}

setInterval(next, 8000);