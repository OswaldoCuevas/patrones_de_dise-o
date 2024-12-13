function addUser(){
    var name = $("#name").val();
    var password = $("#password").val();
    var email = $("#email").val();
    var data = {
        name: name,
        password: password,
        email: email
    };
    $.ajax({
        type: "POST",
        url: "users/add",
        data: data,
        success: function(data){
            setDataTable();
        },
        error: function(err){
            alert("Error: " + err.responseJSON.message);
        }
    });
}
function setDataTable(){
    $.ajax({
        type: "GET",
        url: "users/all",
        success: function(data){
            const json = JSON.parse(data);
            const html = json.map(user => {
                return `<tr>
                            <td>${user.Name}</td>
                            <td>${user.Email}</td>
                        </tr>`;
            }).join("");
            console.log(html);
            $("#table_users").html(html);
        },
        error: function(err){
            alert("Error: " + err.responseJSON.message);
        }
    });    
}
function clearFields(){
    $("#name").val("");
    $("#password").val("");
    $("#email").val("");
}