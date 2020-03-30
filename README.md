# WLAN-Pi-Web-UI-for-pcap-capture
A simple Web UI for pcap wireless capture with 2 adapters

Feel free to adapt to your need :)

!!! WARNING !!!
This script should not be deployed on a production network as it is highly insecured.
It is run as root through the use of the set UID bit.
Its installation on a production machine could result on its exploitation to gain access to your network.
You've been warned :)
Install it on a dedicated WLAN Pi that you will use only for wireless audit and testing and that will connect only to your laptop.
!!! END OF WARNING !!!

A simple Web UI to launch a wireless capture without having to open a SSH session, launch the script, etc.

# INSTALLATION

1. Copy the files to /var/www/html/capture
2. sudo chown -R www-data.www-data /var/www/html/capture
3. sudo chown root.root /var/www/html/capture/script/capture
4. sudo chmod 4755 /var/www/html/capture/script/capture
5. sudo chown root.root /var/www/html/capture/script/stop_capture
4. sudo chmod 4755 /var/www/html/capture/script/stop_capture

# USAGE

1. Open your Web browser and go to http://[WLAN Pi IP address]/capture/
2. Fill the form and hit "Begin capture" to launch the wireless capture
3. Once the capture launched, you can unplug the RJ45 cable on your WLAN Pi and take it o a ride
4. When you are done with your capture, reconnect to the Web page and hit "Stop capture"
5. The pcap files are on http://[WLAN Pi IP address]/capture/pcap/

Enjoy ;)
