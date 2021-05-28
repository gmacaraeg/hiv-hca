
    

 



//Setting the variables for the Objects of the webpage
var list_users = document.querySelector('#list_users');

const chatArea = document.getElementById('chat-area');
const messageInput = document.getElementById('message');

//for input message porpuses
var session = document.getElementById('admin_id_for_firestore').value;
var sender = document.getElementById('admin_name_display').value;

var chatroom_id = "";


function delayedRefresh(){
  window.location.href = 'app_user.php';
}

  





//Displaying User lists
//APPENDING TR AND TD in the Tbody with id = list_users
function renderUsers(doc) {
        var full = doc.data().full_name;
        //var fullname = capitalizeFirstLetter(full);
        var address = doc.data().address;
        var contact = doc.data().contact;
        var blood_type = doc.data().blood_type;
        var accnt_status = doc.data().account_status

    //create element tr and td
    
        var tr = document.createElement('tr');
       
        var td_fullname = document.createElement('td');
        var td_address = document.createElement('td');
        var td_contact = document.createElement('td');
        var td_bloodtype = document.createElement('td');
        var td_status = document.createElement('td');
        var td_detail = document.createElement('td');
        var td_detail_center = document.createElement('center');


    //create message button
        var td_btn_detail = document.createElement('button');
        var td_btn_detail_icon = document.createElement('i');
        td_btn_detail_icon.className = 'fas fa-comment';
        td_btn_detail.appendChild(td_btn_detail_icon);
        td_btn_detail.className = 'btn btn-info btn-sm';
        td_btn_detail.id = 'btn_details';

  
    //create sched button
        var td_btn_sched = document.createElement('button');
        var td_btn_sched_icon = document.createElement('i');
        td_btn_sched_icon.className = 'fas fa-calendar';
        td_btn_sched.appendChild(td_btn_sched_icon);
        td_btn_sched.className = 'btn btn-secondary btn-sm';
        td_btn_sched.id = 'btn_sched';
       


    
    //create disable button
    var td_btn_delete = document.createElement('button');
    var td_btn_delete_icon = document.createElement('i');
    td_btn_delete_icon.className = 'fas fa-ban';
    td_btn_delete.appendChild(td_btn_delete_icon);
    td_btn_delete.className = 'btn btn-danger btn-sm';
    td_btn_delete.id = 'btn_delete';
    
   

    
    //create enable button
    var td_btn_enable = document.createElement('button');
    var td_btn_enable_icon = document.createElement('i');
    td_btn_enable_icon.className = 'fas fa-check';
    td_btn_enable.appendChild(td_btn_enable_icon);
    td_btn_enable.className = 'btn btn-success btn-sm';
    td_btn_enable.id = 'btn_enable';

    td_btn_enable.onmouseover = function(){
        //td_btn_delete.textContent = 'Disable';
        //td_btn_delete.className = 'btn btn-danger btn-sm animated fadeIn';
      }
      td_btn_enable.onmouseout = function(){
        //td_btn_delete.className = 'btn btn-danger btn-sm';
        //td_btn_delete.textContent = '';
        //td_btn_delete_icon.className = 'fas fa-ban';
        //td_btn_delete.appendChild(td_btn_delete_icon);
      }
    

    

    //add spaces between the buttons (&nbsp in javascript)
    var pre1 = document.createTextNode("\u00A0\u00A0");
    var pre2 = document.createTextNode("\u00A0\u00A0");
    var pre3 = document.createTextNode("\u00A0\u00A0");



    //set id to tr
    //Var User_id = String(doc.id).trim;
    tr.setAttribute('data-id', doc.id.trim());
    //var delete_target_id = tr.getAttribute('data-id');
    td_fullname.textContent = full;
    td_address.textContent = address;
    td_contact.textContent = contact;
    td_bloodtype.textContent = "Type" + " " + blood_type;
    td_status.textContent = accnt_status;
   

  

    //append child buttons
    td_detail_center.appendChild(td_btn_delete);
    td_detail_center.appendChild(pre3);
    td_detail_center.appendChild(td_btn_enable);
    td_detail_center.appendChild(pre1);
    td_detail_center.appendChild(td_btn_detail);
    td_detail_center.appendChild(pre2);
    td_detail_center.appendChild(td_btn_sched);

    td_detail.appendChild(td_detail_center);

    //append child td
    //tr.appendChild(td_id);
    tr.appendChild(td_fullname);
    tr.appendChild(td_address);
    tr.appendChild(td_contact);
    tr.appendChild(td_bloodtype);
    tr.appendChild(td_status);
    tr.appendChild(td_detail);
    list_users.appendChild(tr);






      //DISABLE DATA
 td_btn_delete.addEventListener('click', (e) => {
    e.stopPropagation();
    Swal.fire({
      title: 'Deactivate Account?',
      text: "",
      icon: 'warning',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Disable'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'User Account Disabled!',
          'success'
        )
        var delete_target_id = e.target.parentElement.parentElement.parentElement.parentElement.getAttribute('data-id');
        db.collection('Users').doc(delete_target_id).update({
        
          account_status: "Disabled"
        })
        setTimeout(delayedRefresh,600);
      }
    })
  })
  
  //ENABLE DATA
  td_btn_enable.addEventListener('click', (e) => {
    e.stopPropagation();
    Swal.fire({
      title: 'Enable Account?',
      text: "",
      icon: 'info',
      showCancelButton: true,
      confirmButtonColor: '#3085d6',
      cancelButtonColor: '#d33',
      confirmButtonText: 'Activate'
    }).then((result) => {
      if (result.isConfirmed) {
        Swal.fire(
          'User Account Activated!',
          'success'
        )
        var delete_target_id = e.target.parentElement.parentElement.parentElement.parentElement.getAttribute('data-id');
        db.collection('Users').doc(delete_target_id).update({
          account_status: "Activated"
        })
        setTimeout(delayedRefresh,600);
      }
    })
  })




//INPUTING CHAT MESSAGE
  $(messageInput).unbind();
  $(messageInput).bind("keypress",function(event){
    if(event.keyCode==13)
    {
      
      db.collection(chatroom_id).add({
        msgdate: new Date(),
        sender_id: session,
        sender_name: sender,
        uid: "Admin HACT",
        message: messageInput.value
        
      })

      event.stopPropagation();
      messageInput.value = "";
      return;
      
    }
});



    

    


//Display Chat
td_btn_detail.addEventListener('click', (e) => {

  var target_id = e.target.parentElement.parentElement.parentElement.parentElement.getAttribute('data-id');
  messageInput.disabled = false;
  chatroom_id = "chatroom-"+target_id;

    db.collection("chatroom-"+target_id).orderBy('msgdate', 'desc').onSnapshot(snapshot => {

    chatArea.innerHTML = '';

    snapshot.forEach((doc) =>  {

     if(doc.data().uid == doc.data().sender_id) {
      const messageContainer = document.createElement('div');
 
      const sendername = document.createElement('small');
      sendername.style.cssText = 'color: black; font-weight: bold;';

      const timestampElement = document.createElement('small');
      timestampElement.style.cssText = 'color: black; margin-left:180px; font-style: italic';

      const messageElement = document.createElement('small');
      const messageDate = new Date(doc.data().msgdate.seconds * 1000);


      sendername.innerText = doc.data().sender_name + '\n';
      messageElement.innerText = doc.data().message + '\n';
      timestampElement.innerText = messageDate.toISOString().replace('T', ' ').substring(0, 19);
      
      
      messageContainer.appendChild(sendername);
      messageContainer.appendChild(messageElement);
      messageContainer.appendChild(timestampElement);
      messageContainer.className = 'alert alert-info';
  
      chatArea.appendChild(messageContainer);
     
     } else {

      const messageContainer2 = document.createElement('div');
      messageContainer2.style.cssText = 'text-align: right';

      const sendername = document.createElement('small');
      sendername.style.cssText = 'color: black; font-weight: bold;';

      const timestampElement = document.createElement('small');
      timestampElement.style.cssText = 'color: black; margin-left:180px; font-style: italic';

      const messageElement = document.createElement('small');
      const messageDate = new Date(doc.data().msgdate.seconds * 1000);

      messageElement.innerText = doc.data().message + '\n';
      messageElement.style.cssText = 'color: white;';


      sendername.innerText = doc.data().sender_name + '\n';
      timestampElement.innerText = messageDate.toISOString().replace('T', ' ').substring(0, 19);
      
      
      messageContainer2.appendChild(sendername);
      messageContainer2.appendChild(messageElement);
      messageContainer2.appendChild(timestampElement);
      messageContainer2.className = 'alert alert-secondary';
  
      chatArea.appendChild(messageContainer2);




     }
  

    });

 });

});







//showing user sched 
td_btn_sched.addEventListener('click', (e) => {

  var target_id = e.target.parentElement.parentElement.parentElement.parentElement.getAttribute('data-id');
  
 

  db.collection("Schedule").where("user_id", "==", target_id)
  .get()
  .then((querySnapshot) => {

    sched_area.innerHTML = '';

  querySnapshot.forEach((doc) => {

      //console.log(doc.id, " => ", doc.data());
      const space = document.createTextNode("\u00A0");
      const linebreak = document.createElement("br");




      //getting date
      var date = Date.parse(doc.data().date);
      var date_output = new Date(date).getTime();
      var final_date_output = new Date(date_output).toDateString();

       
      const sched_Container = document.createElement('div');
      sched_Container.className = 'alert alert-secondary';
      //sched_Container.setAttribute('sched-id', doc.id);



      const date_header = document.createElement("label");
      const time_header = document.createElement("label");
      const reason_header = document.createElement("label");


      const btn_approved = document.createElement("button");
      btn_approved.className = "btn-sm btn btn-success";

      const select_dropdown = document.createElement("SELECT");
      select_dropdown.setAttribute("id", "selection");
      document.body.appendChild(select_dropdown);

      const option1 = document.createElement("option");
      option1.setAttribute("value", "Approved No Changes");
      option1.textContent = "Approve No Changes";

      const option2 = document.createElement("option");
      option2.setAttribute("value", "Approved Rescheduled");
      option2.textContent = "Approve Rescheduled";

      select_dropdown.appendChild(option1);
      select_dropdown.appendChild(option2);


     
      const field_date = document.createElement("INPUT");
      field_date.setAttribute("type", "date");
      field_date.className = "form form-control input-sm ";

      const field_time = document.createElement("INPUT");
      field_time.setAttribute("type", "text");
      field_time.className = "form form-control input-sm";

      const field_reason = document.createElement("textarea");
      field_reason.className = "form form-control input-sm";
      field_reason.setAttribute("disabled", "true");

  
      
      field_date.value = formatDate(final_date_output);
      field_time.value = doc.data().time;
      field_reason.value = doc.data().reason;

      date_header.textContent =  "Scheduled Date" + " - " + doc.data().status;
      time_header.textContent = "Time:";
      reason_header.textContent = "Reason:";
      btn_approved.textContent = "Approve?";


      sched_Container.appendChild(date_header);
      sched_Container.appendChild(field_date);
      sched_Container.appendChild(linebreak);
      sched_Container.appendChild(time_header);
      sched_Container.appendChild(field_time);
      sched_Container.appendChild(linebreak);
      sched_Container.appendChild(reason_header);
      sched_Container.appendChild(field_reason);
      sched_Container.appendChild(linebreak);
      sched_Container.appendChild(select_dropdown);
      sched_Container.appendChild(space);
      sched_Container.appendChild(space);
      sched_Container.appendChild(space);
      sched_Container.appendChild(space);
      sched_Container.appendChild(btn_approved);
      
    

      sched_area.appendChild(sched_Container);


    //updating  
    
    btn_approved.addEventListener('click', (e) => {
      var new_date = new Date(field_date.value).toDateString();

        db.collection('Schedule').doc(doc.id).update({

          date: new_date,
          time: field_time.value,
          status: select_dropdown.value
        
        }).then(()=>{
          Swal.fire(
            'Scheduled Approved!',
            'Schedule Confirmed',
            'success'
          )

    });

      });








    });
});



});
















}







  //GETTING DATA REAL-TIME (efficient way) FOR TABLE
  db.collection('Users').orderBy('full_name').onSnapshot(snapshot => {
    let changes = snapshot.docChanges();
    changes.forEach(change => {
        if((change.type == 'added')){
            renderUsers(change.doc); 
        } else if ((change.type == "modified")){
            renderUsers(change.doc); 
        } else if(change.type == 'removed'){
            let li = document.querySelector('[data-id=' + change.doc.id + ']');
            list_users.removeChild(li);
        }
    })
})






//SORT BY STATUS
document.querySelector('#sort_status').addEventListener('change', function(e){
  const value_status = e.target.value;
    const lists_status = list_users.getElementsByTagName('tr');
    Array.from(lists_status).forEach(function(book_account_status){
      if(value_status != false){
        const title_status = book_account_status.childNodes[4].textContent;
        if(title_status.indexOf(value_status) != -1){
          book_account_status.style.display = "";
        } else {
          book_account_status.style.display = 'none';
        }
      } else {
        book_account_status.style.display = '';
      }
    })
})




 //SEARCH
function searchTable(){
  //DATATABLE PLUGIN
  $(document).ready(function() {
    var table = $('#tbl_users').DataTable({paging: false});
    $('#search_bar').on( 'keyup', function () {
      table.search( this.value ).draw();
    } );

    var tbl_top = document.querySelector('#tbl_wrapper .row');
    tbl_top.style.display = "none";

    var tbl_foot = document.querySelectorAll('#tbl_wrapper .row')[2];
    tbl_foot.style.display = "none";

  })
}
//RUN SEARCH FUNCTION
setTimeout(searchTable,2000);





//formatting date for date input
function formatDate(date) {
  var d = new Date(date),
      month = '' + (d.getMonth() + 1),
      day = '' + d.getDate(),
      year = d.getFullYear();

  if (month.length < 2) 
      month = '0' + month;
  if (day.length < 2) 
      day = '0' + day;

  return [year, month, day].join('-');
}