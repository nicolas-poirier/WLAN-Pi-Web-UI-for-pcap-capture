#!/bin/bash

# capture 802.11 sur deux canaux

#iw [options] dev <devname> set channel <channel> [NOHT|HT20|HT40+|HT40-|5MHz|10MHz|80MHz]

killall kismet
airmon-ng check kill

airmon-ng start wlan0
airmon-ng start wlan1

date="VAR_DATE"
hour="VAR_TIME"
canal1="VAR_CANAL1"
largeur1="VAR_LARGEUR1"
canal2="VAR_CANAL2"
largeur2="VAR_LARGEUR2"
slice="VAR_SLICE"

date --set $date
date --set $hour

iw dev wlan0 set channel $canal1 $largeur1
iw dev wlan1 set channel $canal2 $largeur2

DATE=`date '+%Y%m%d_%Hh%M'`
tcpdump -i wlan0 -y IEEE802_11_RADIO -s ${slice} -w ../pcap/wlan0_ch${canal1}_${DATE}.pcap &
tcpdump -i wlan1 -y IEEE802_11_RADIO -s ${slice}  -w ../pcap/wlan1_ch${canal2}_${DATE}.pcap &
