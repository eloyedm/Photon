$(document).ready(function() {
                     $("#notificationLink").click(function()
                                                {
                       $("#notificationContainer").fadeToggle(300);
                       $("#notification_count").fadeOut("slow");
                       return false;
                   });

                   $(document).click(function()
                                     {
                       $("#notificationContainer").hide();
                   });
                   $("#notificationContainer").click(function()
                                                     {
                       return false;
                   });
               });
               function changetab(evt, tabName) {
                   if(tabName.localeCompare("friend") == 0)
                   {
                       document.getElementById('friend').style.display = "inline-block";
                       document.getElementById('notification').style.display = "none";
                       document.getElementById('profile').style.display = "none";
                   }

                   if(tabName.localeCompare("notification") == 0)
                   {
                       document.getElementById(tabName).style.display = "inline-block";
                       document.getElementById('friend').style.display = "none";
                       document.getElementById('profile').style.display = "none";
                   }

                   if(tabName.localeCompare("profile") == 0)
                   {
                       document.getElementById(tabName).style.display = "inline-block";
                       document.getElementById('notification').style.display = "none";
                       document.getElementById('friend').style.display = "none";
                   }
               }
