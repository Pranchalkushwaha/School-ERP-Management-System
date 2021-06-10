var manageTeacherTable;
var base_url = $("#base_url").val();

$(document).ready(function(){
    
    manageTeacherTable = $("#manageTeacherTable").DataTable({
        ajax: base_url + "Teacher/fetchTeacherData",
        order: [],
    });

    //add Btn open fuction
    document.getElementById('addBtn').addEventListener('click',function(){
        document.querySelector('.bg-modal').style.display = 'flex';
    });
    //add Btn open fuction

    //add Btn close fuction
    document.querySelector('.close').addEventListener('click',function(){
        document.querySelector('.bg-modal').style.display = 'none';
    });
    //add Btn close fuction


    //change image
    var loadFile = function(event){
        var output = document.getElementById('output');
        output.src = URL.createObjectURL(event.target.files[0]);
        output.onload = function(){
            URL.revokeObjectURL(output.src);
        }
    };
});

