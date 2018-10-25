# Snoopi.io PHP SDK
PHP SDK For Snoopi GeoLocation

Founded in 2015, Snoopi is a GeoIP Webservice that allows web developers to retrieve a user’s location via ip address in a non-intrusive way. It’s a great for marketing solutions such as tracking users on landing pages, sign-ups, contact forms, to something as more complex to fraud detection for eCommerce platforms. IP Addresses can be translated into Country, City, Latitude, Longitude, Zip Code, TimeZone etc..

There’s a lot of providers out there that provide GeoIP solutions, however what makes Snoopi different is the light weight quick response time that allows it to make it easy for developers to integrate into their web solutions. We also have additional tools such as Zip Code Radius, Latitude / Longitude to ZipCode which is great for apps, and few other services that make it easier for developers. 

--------------------------------------------------------------------------------------------------------

	$Snoopi = new Snoopi(); 
	
	$GeoLocation = $Snoopi->GeoIPLocation('186.83.228.58');
	print_r(json_decode($GeoLocation));
	echo "<hr>";
    
    
