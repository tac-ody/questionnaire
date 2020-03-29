$("#seminarType").change(function () {
    var a = $("#seminarType option:selected").val();
    if (a == "2" || a == "3" || a == "4" || a == "5") {
        $(".seminarEvaluation").eq(0).prop('disabled', true);
        $(".seminarEvaluation").eq(4).prop('disabled', true);
        $(".seminarEvaluation").eq(1).prop('checked', true);
    } else if (a == "1") {
        $(".seminarEvaluation").eq(0).prop('disabled', false);
        $(".seminarEvaluation").eq(4).prop('disabled', false);
        $(".seminarEvaluation").eq(0).prop('checked', true);
    } else if (a == "6") {
        $(".seminarEvaluation").eq(0).prop('disabled', false);
        $(".seminarEvaluation").eq(4).prop('disabled', false);
        $(".seminarEvaluation").eq(0).prop('checked', true);
    }
});
$("#seminarType").change(function () {
    var b = $("#seminarType option:selected").val();
    if (b == "1") {
        $(".seminarTrigger").eq(0).prop('disabled', false);
        $(".seminarTrigger").eq(4).prop('disabled', false);
        $(".seminarTrigger").eq(5).prop('disabled', true);
        $(".seminarTrigger").prop('checked', false);
    } else if (b == "2" || b == "3" || b == "4") {
        $(".seminarTrigger").eq(0).prop('disabled', true);
        $(".seminarTrigger").eq(4).prop('disabled', true);
        $(".seminarTrigger").eq(5).prop('disabled', true);
        $(".seminarTrigger").prop('checked', false);
    } else if (b == "5") {
        $(".seminarTrigger").eq(0).prop('disabled', true);
        $(".seminarTrigger").eq(4).prop('disabled', false);
        $(".seminarTrigger").eq(5).prop('disabled', true);
        $(".seminarTrigger").prop('checked', false);
    } else if (b == "6") {
        $(".seminarTrigger").eq(0).prop('disabled', false);
        $(".seminarTrigger").eq(4).prop('disabled', false);
        $(".seminarTrigger").eq(5).prop('disabled', false);
        $(".seminarTrigger").prop('checked', false);
    }
});
