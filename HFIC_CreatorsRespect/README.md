# HFIC_CreatorsRespect.  
Contact list generator, with social network communication services templates.

# Features:
    Multilanguage;
    Multyplatform;
    Expandable list of social communication network templates;
     Forms templates for input contacts  (html/js);
     Contact list templates for output contacts list (html/xml/txt/hfic);
     
# Usage:
     Standalone;
     Mutch better, is to plug it into EDRO.Polymer system;
     EDRO.Polymer - controls and safe input/output operations;
     
# Project files:
    /EDRO.SetOfTools/HFIC_CreatorsRespect/ElectronicContactsServices.php : Executable. ElectronicContactsServices;
    /EDRO.SetOfTools/HFIC_CreatorsRespect/arrElectronicContactsForPublish.php : Filled in contacts. Array arrElectronicContactsForPublish;
    /EDRO.SetOfTools/HFIC_CreatorsRespect/arrElectronicContactsIOTemplates.php  : Social service templates. Array arrElectronicContactsIOTemplates;
    
# How does it works:
    1.Fill in Load arrElectronicContactsForPublish.php;
    2.Load arrElectronicContactsIOTemplates.php (eg. include);
    3.Load arrElectronicContactsForPublish.php (eg. include);
    4.Run ElectronicContactsServices.php;
    5 Object ElectronicContactsServices will process template array with contacts array;
      and generate list  of form or readable contacts list;
    

