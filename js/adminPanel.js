$(document).ready(function(){
    // load stu registration view
    $('#addStu').click(function(){

        $('#loadView').load('stu/registerStu.php');
    })
})

$(document).ready(function(){
    // load stu list view
    $('#viewStu').click(function(){

        $('#loadView').load('stu/stuList.php');
    })
})

$(document).ready(function(){
    // load stu mark view
    $('#Stu').click(function(){

        $('#loadView').load('stu/mark.php');
    })
})

$(document).ready(function(){
    // load stu qr view
    $('#qrStu').click(function(){

        $('#loadView').load('../../new_qr/qr.php');
    })
})

$(document).ready(function(){
    // load stu attendance view
    $('#atStu').click(function(){

        $('#loadView').load('stu/atStu.php');
    })
})







