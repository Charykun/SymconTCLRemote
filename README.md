# Symcon TCL Remote
Remote Steuerung für TCL TV Geräte.
(Getestet mit TCL U40S7606DS Fernseher)

## Dokumentation

**Inhaltsverzeichnis**

1. [Voraussetzungen](#1-voraussetzungen)
2. [Installation](#2-installation)
3. [Funktionsreferenz](#3-funktionsreferenz) 

## 1. Voraussetzungen

 - IPS 4.x

## 2. Installation

   - IPS 4.x  
        Über das 'Modul Control' folgende URL hinzufügen:  
        `git://github.com/Charykun/SymconTCLRemote.git`

## 3. Funktionsreferenz

```php
/*
 *  Key PowerOff
 * @param integer $InstanceID
 */
TCL_PowerOff($InstanceID);

/*
 *  Key VolumeUp
 * @param integer $InstanceID
 */
TCL_VolumeUp($InstanceID);

/*
 *  Key VolumeDown
 * @param integer $InstanceID
 */
TCL_VolumeDown($InstanceID);

/*
 *  Key Mute
 * @param integer $InstanceID
 */
TCL_Mute($InstanceID);

/*
 *  Key TV
 * @param integer $InstanceID
 */
TCL_TV($InstanceID);

/*
 *  Key ChannelUp
 * @param integer $InstanceID
 */
TCL_ChannelUp($InstanceID);

/*
 *  Key ChannelDown
 * @param integer $InstanceID
 */
TCL_ChannelDown($InstanceID);

/*
 *  Send Numbers
 * @param integer $InstanceID
 * @param string $Number
 */
TCL_SendNumber($InstanceID, $Number);

/*
 *  Key List
 * @param integer $InstanceID
 */
TCL_ChList($InstanceID);

/*
 *  Key Source
 * @param integer $InstanceID
 */
TCL_Source($InstanceID);

/*
 *  Key SmartTV
 * @param integer $InstanceID
 */
TCL_SmartTV($InstanceID);

/*
 *  Key Up
 * @param integer $InstanceID
 */
TCL_UP($InstanceID);

/*
 *  Key DOWN
 * @param integer $InstanceID
 */
TCL_DOWN($InstanceID);

/*
 *  Key Left
 * @param integer $InstanceID
 */
TCL_Left($InstanceID);

/*
 *  Key Right
 * @param integer $InstanceID
 */
TCL_Right($InstanceID);

/*
 *  Key OK
 * @param integer $InstanceID
 */
TCL_OK($InstanceID);

/*
 *  Key Back
 * @param integer $InstanceID
 */
TCL_Back($InstanceID);

/*
 *  Key Red
 * @param integer $InstanceID
 */
TCL_Red($InstanceID);

/*
 *  Key Green
 * @param integer $InstanceID
 */
TCL_Green($InstanceID);

/*
 *  Key Yellow
 * @param integer $InstanceID
 */
TCL_Yellow($InstanceID);

/*
 *  Key Blue
 * @param integer $InstanceID
 */
TCL_Blue($InstanceID);

/*
 *  Key Guide
 * @param integer $InstanceID
 */
TCL_Guide($InstanceID);

```
   
 
