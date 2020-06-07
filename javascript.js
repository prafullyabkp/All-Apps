var user_ip = getenv('REMOTE_ADDR');
var geo = unserialize(file_get_contents("http://www.geoplugin.net/php.gp?ip=$user_ip"));
var country = geo["geoplugin_countryName"];

  switch (country) {
    case "India":
        header('Location:https://kumar360.com');
        break;
    case "United States":
        header('Location:http://kumar3660.in');
        break;
    default:   
        header('Location:http://google.com');  
  }
