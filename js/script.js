function calendar(){
    var day=['Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday'];
    var month=['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
    var date=new Date();
    setText('calendar-day', day[d.getDay()]);
    setText('calendar-date', date.getDate());
    setText('calendar-month-year', month[d.getMonth()] +' '+(1900+date.getYear()));
};

function setText(id, val){
    if(val < 10){
        val = '0' + val;  // Add leading 0 if val < 10
    }
    document.getElementById(id).innerHTML = val;
};

// Call calendar() when page loads
window.onload = calendar;