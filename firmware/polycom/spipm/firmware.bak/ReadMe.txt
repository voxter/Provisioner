Polycom® SoundPoint® IP, SoundStation® IP and VVX® UC Software Release 4.0.6

This UC Software feature release applies to currently shipped SoundPoint IP, SoundStation IP and VVX Business media products deployed on SIP networks. 


WARNINGS:  

  1. The configuration files, their respective parameters and defaults, as well as the     
     provisioning methods have been simplified but extensively modified compared to
     previous releases. MANY OF THESE CHANGES ARE NOT BACKWARD-COMPATIBLE with 
     configuration files generated for earlier software releases.

     Polycom recommends that you first familiarize yourself with the changes         
     outlined in the “Administrator’s Guide for the Polycom® UC Software – 4.0.1” and 
     Technical Bulletin 60519, “Simplified Configuration Improvements in Polycom® 
     UC Software 3.3.0” before proceeding to configure the respective product.
     This Technical Bulletin is available from the Polycom® Support site. 
     

  2. The UCS 4.0.5 distributable files contain both the BootROM (now named
     Updater) and SIP software. There are new procedures to upgrade your phone to the
     UCS 4.0.x if you are currently using 3.x.x software on your phone. 

     Polycom recommends that you first familiarize yourself with the information
     in Engineering Advisory 68081 "Announcing New Polycom® UC Software Installation
     Changes" before upgrading your phone to UCS 4.0.0 from an earlier
     version. This Engineering Advisory is available from the Polycom® Support site. 


  3. The SoundPoint IP 300, 301, 320, 330, 430, 500, 501, 600, 601, SoundStation IP          
     4000,Sound structure and Spectralink 84xx products are not supported in this release. 
     Customers using these products should refer to Technical Bulletin 35311 for
     instructions on how to configure the phones. 
     This Technical Bulletin is available from the Polycom® Support site.

     
This Release supports the following products:

   SoundPoint IP 321, 331
   SoundPoint IP 335 
   SoundPoint IP 450
   SoundPoint IP 550
   SoundPoint IP 560
   SoundPoint IP 650
   SoundPoint IP 670
   SoundStation IP 5000
   SoundStation IP 6000
   SoundStation IP 7000
   SoundStation Duo
   VVX 500
   VVX 1500
  

For build-id information, refer to the sip.ver file included in the release Zip file.
For details on changes in this build, refer to the relevant Release Notes.

Recommended Upgrade Process:

  1. Unzip the contents of the release zip file.

  2. Place the respective sip.ld file into the appropriate location on the provisioning
     server.

  3. Update your configuration files to use the template files contained in the release         
     zip file. In particular ensure that you use the new config files as there may be
     changes that are required for proper phone operation. Refer to the 
     documentation included with your softswitch provider and/or follow the recommended 
     practices in the reference documents listed below.

  4. If you are using SoundPoint IP 300 or 500 devices deploy copies of the SIP 2.1.2 or
     2.1.3 release and configuration files named appropriately (See Technical Bulletin 
     35311 for details).

  5. Place the dictionary files into the appropriate location on the provisioning server.

  6. On the next phone reboot, the phones will automatically detect the new software and
     load it. In this case, the reboot will take slightly longer than a typical reboot.

  7. Confirm that the phone has loaded the correct software:
   a) If you have physical access to the phone, select 
      Menu->Status->Platform->Application->Main and confirm that the Version number 
      matches that detailed in the Release Notes and in the sip.ver file.
   b) If the phones are being remotely upgraded, the version identifier may be verified by
      examining the phone application log file.

The following reference documents are available from Polycom® Support web pages:
  1. Release Notes 4.0.6
  2. Administrators' Guide UCS 4.0.1
  3. Technical Bulletin 60519 Simplified Configuration Improvements in Polycom® 
     UC Software 3.3.0
  4. Engineering Advisory 68081 "Announcing New Polycom® UC Software Installation        
     Changes"
  5. Feature Profile 83102 - Using Multiple Appearance Directory Number - Single Call Appearance with Polycom® Phones
  6. Feature Profile 72669 - Integrating Polycom® Directories with GENBAND™ Address Books 






Trademark Information
Polycom®, SoundPoint®, SoundStation®, VVX®, SpectraLink® and the Polycom logo design are registered trademarks of Polycom, Inc. 
in the U.S. and various countries. All other trademarks are the property of their respective companies.
