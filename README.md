# WLAN-Pi-Web-UI-for-pcap-capture
A simple Web UI to launch a wireless capture without having to open a SSH session, launch the script, etc.
Work with 2 adapters.
Feel free to adapt to your need :)

![WLAN-Pi-Web-UI_Example](https://github.com/nicolas-poirier/WLAN-Pi-Web-UI-for-pcap-capture/blob/master/WLANPi_Web-wireless-capture-example.png)

# !!! WARNING !!!
This script should not be deployed on a production network as it is highly insecured.
It is run as root through the use of the set UID bit.
Its installation on a production machine could result on its exploitation to gain access to your network.
You've been warned :)
Install it on a dedicated WLAN Pi that you will use only for wireless audit and testing and that you will connect only to your laptop.
!!! END OF WARNING !!!

# INSTALLATION

1. mkdir /var/www/html/capture
2. mkdir /var/www/html/capture/pcap
3. Copy the index.html file and the 2 directories to /var/www/html/capture
4. sudo chown -R www-data.www-data /var/www/html/capture
5. sudo chown root.root /var/www/html/capture/script/capture
6. sudo chmod 4755 /var/www/html/capture/script/capture
7. sudo chown root.root /var/www/html/capture/script/stop_capture
8. sudo chmod 4755 /var/www/html/capture/script/stop_capture

# USAGE

1. Open your Web browser and go to http://[WLAN Pi IP address]/capture/
2. Fill the form and hit "Begin capture" to launch the wireless capture
3. Once the capture launched, you can unplug the RJ45 cable on your WLAN Pi and take it o a ride
4. When you are done with your capture, reconnect to the Web page and hit "Stop capture"
5. The pcap files are on http://[WLAN Pi IP address]/capture/pcap/

Enjoy ;)
