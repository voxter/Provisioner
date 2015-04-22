Polycom® VVX® Business media phones and SoundStructure® UC Software Release 5.3.0

This UC Software feature release applies to currently shipped VVX VVX®Business media Phones 300, 310, 400, 410 , 500, 600 

and 1500 Business media phones, VVX Camera, VVX Expansion Module support and SoundStructure® products deployed on SIP networks. 


WARNINGS:  

  1. This is the software release applicable for all VVX® Business media phones and SoundStructure®.
  
  
  2. The UCS 5.3.0 distributable files contain both the Updater and SIP software combined together in ".ld" format. 


  3. ALL The SoundPoint IP and SoundStation IP products are not supported in this release. 
     Customers using these products should refer to polycom support page for respective latest softwares available. 
   

     
This Release supports the following products:

   VVX® 300/310
   VVX® 400/410
   VVX® 500
   VVX® 600
   VVX® 1500,1500C, 1500D
   SoundStructure®
   

  

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

  4. Place the dictionary files into the appropriate location on the provisioning server.

  5. On the next phone reboot, the phones will automatically detect the new software and
     load it. In this case, the reboot will take slightly longer than a typical reboot.

  6. Confirm that the phone has loaded the correct software:
   a) If you have physical access to the phone, select 
      Menu->Status->Platform->Application->Main and confirm that the Version number 
      matches that detailed in the Release Notes and in the sip.ver file.
   b) If the phones are being remotely upgraded, the version identifier may be verified by
      examining the phone application log file.

The following reference documents are available from Polycom® Support web pages:
  1. Release Notes 5.3.0
  2. Administrators' Guide UCS 5.3.0
  3. Provisioning guide "Provisioning Polycom Phones with MIcrosoft Lync server"
  4. Polycom Unified Communications Deployment Guide for Microsoft Environments 
  5. Using Polycom® Phones in a Microsoft® Lync® 2010 Environment
  6. VVX500_user guide
  7. VVX600_user guide
  8. VVX 500_600_Administrator Guide
  9. VVX400_410_UserGuide
 10. VVX300_310_UserGuide
 11. VVX300_310_400_410_Adminstrator Guide
 12. Engineering Advisory 68081 "Announcing New Polycom® UC Software Installation        
     Changes"



Trademark Information
Polycom®, VVX® and the Polycom logo design are registered trademarks of Polycom, Inc. 
in the U.S. and various countries. All other trademarks are the property of their respective companies.
