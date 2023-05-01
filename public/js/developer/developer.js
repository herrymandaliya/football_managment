$(document).ready(function() {

  $('#salary').keyup(function() {
    //Get the updated values
    const salary = parseFloat($(this).val());
    const today = new Date();
    const year = today.getFullYear();
    const month = today.getMonth() + 1;
    const workingDays = getMonthlyWorkingDays(year, month);
    console.log('workingDays',workingDays);
    const workingHours = 8;
    // Calculate the hourly rate
    const hourlyRate = salary / (workingDays * workingHours);
    // Set the hourly rate output
    $('#hourly_rate').val(hourlyRate.toFixed(2));
   
  });

  function getMonthlyWorkingDays(year, month) {
    const firstDay = new Date(year, month - 1, 1);
    const lastDay = new Date(year, month, 0);
    let workingDays = 0;
  
    for (let date = firstDay; date <= lastDay; date.setDate(date.getDate() + 1)) {
      if (date.getDay() !== 0 && date.getDay() !== 6) {
        workingDays++;
      }
    }
  
    return workingDays;
  }
 
});
$( "#datepicker" ).datepicker({
  minDate: 0 // 0 means today, negative values mean past dates, positive values mean future dates
});




