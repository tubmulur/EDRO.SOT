Overlay displays over the element, and shows the element's current4 condition.
/home/EDRO/4.Objects/Write/Listener/Display/Element/Overlay/Overlay.php   <br/>
<?php <br/>
                     /*_____<br/>
© Andrey Chekmaryov 2020<br/>
<br/>
Email:    assminog@gmail.com<br/>
Email:    tubmulur@yandex.ru<br/>
Phone:    +7(911)787-44-57<br/>
Whatsapp: +7(911)787-44-57<br/>
Telegram: https://t.me/HficSamin<br/>
VK:       https://vk.com/Hfic.Samin<br/>
VK:       https://vk.com/HiFiIntelligentClub<br/>
Facebook: https://facebook.com/Hfic.Samin<br/>
Facebook: https://facebook.com/HiFiIntelligentClub<br/><br/>
Site[Ru] Public browsing international:  http://HiFiIntelligentClub.Ru<br/>
Site[En] Public browsing international:  http://HiFiIntelligentClub.COM<br/>
Site[En] Private browsing international: http://ryklzxobxv4s32omimbu7d7t3cdw6dplvsz36zsqqu7ad2foo5m3tmad.onion<br/>
|E    |D     |R      |O      |<br/>
|Event|Design|Reality|Objects|<br/>
 ////// 2020                   /////  /.<br/>
//        /\                  // /...<br/>
//      <  **>               /// /..<br/>
 //////   jl                ///// /....<br/>
./././././././*/<br/>
class Overlay<br/>
<------>{<br/>
<------>public >$strHTML;<br/>
<------>private $arrEvent<----->=array(<br/>
<------><------><------>'strLink'<-----><------>=>'',<br/>
<------><------><------>'strOnClick'<--><------>=>'',<br/>
<------><------>);<br/>
<------>private $arrDesign<---->=array(<br/>
<------><------><------>'strClass'<----><------>=>'',<br/>
<------><------><------>'strStyle'<----><------>=>'',<br/>
<------><------><------>'intLayer'<----><------>=>1,<br/>
<------><------>);<br/><br/>
<------>private $objReality<--->=array(<br/>
<------><------><------>'strRole'<-----><------>=>'',<br/>
<------><------><------>'strLang'<-----><------>=>'',<br/>
<------><------><------>'strText'<-----><------>=>'',<br/><br/>
<------><------>);<br/>
<------>private $arrObjects<--->=array(<br/>
<------><------><------>'strTag'<------><------>=>'a',<br/>
<------><------><------>'strOpen'<-----><------>=>'>',<br/>
<------><------><------>'strClose'<----><------>=>'<',<br/>
<------><------>);<br/>
<------><br/>
<------><br/>


<br/>
