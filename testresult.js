var busyo = $("#busyo").val();
var name = $("#name").val();
var seminarType = $("#seminarType").val();
$("#submit-box").click(function () {
    if (busyo == "") {
        alert("部署が選択されていません");
    } else if (name == "") {
        alert("氏名が入力されていません");
    } else if (seminarType == "") {
        alert("セミナーを選択してください");
    } else {
        return true;
    }
    return false;
});
