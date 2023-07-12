<?php
require __DIR__ . '/vendor/autoload.php';
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Variable styles
$htmlimgContent = '
<style>
.img-container {
    display: flex;
    justify-content: center;
    margin: 20px auto;
}

.img {
    align-self: center;
}
</style>
';


$tempBodyHtml = '
<style>
.tblInvItem,.tblInvItem th, .tblInvItem td, .tblInvItem tr {
    border-collapse: collapse;
    border-bottom: 1px solid;
    padding: 5px;
    align-items: center;
    justify-contents:center;
    margin:5px;
}

.tblexp, .tblexp th, .tblexp td { 
    border-collapse: collapse;
    border: 1px solid;
    padding: 5px;
    align-items: center;
    justify-contents:center;
    margin:5px;
}

.tblinterview, .tblinterview th, .tblinterview td {
    border-collapse: collapse;
    border: 1px solid;
    padding: 5px;
    align-items: center;
    justify-contents:center;
    margin:5px;
}

.textarea{
    justify-contents:center;
    align-items:center;
}

.tblpeh, .tblpeh th, .tblpeh td {
    border-collapse: collapse;
    border: 1px solid;
    padding: 5px;
    margin:5px;
    height:50px;
}

</style>';


// Image
$htmlimgContent .= '
<div class="img-container">
    <img src="/var/www/html/html-to-pdf/pic.jpeg" alt="Image description" class="img">
</div>
';

$tempBodyHtml .= '
<h1 style="text-align:center;"><strong>印尼女佣资料表</strong></h1>
';

$tempBodyHtml .= '
<h1 style="text-align:center;"><strong><u> APPLICANT’S  QUALIFICATION HIGHLIGHTS</u></strong></h1>
<br>
';



//first page
//tblinvitem
$tempBodyHtml .= '
<table style="width:50%; margin-right: 10px;" class="tblInvItem">
    <tr>
        <td style="text-align:left;">
            Name 姓名:
        </td>
        <td style="text-align:left; width:50%;">
            pavi
        </td>
    </tr>

    <tr>
        <td style="text-align:left;">
            Age 年龄:
        </td>
        <td style="text-align:left; width:50%";>
            24
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            Date of Birth 出生日期:
        </td>
        <td style="text-align:left; width:50%">
            1999.06.21
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            Place of Birth 出身地点:
        </td>
        <td style="text-align:left; width:50%">
            trinco
        </td>
    </tr>
    <tr>
    <td style="text-align:left;">
        Height 身高:162cm
    </td>
    <td style="text-align:left;">
        Weight 体重:80kg
    </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            Religion 宗教:
        </td>
        <td style="text-align:left; width:50%">
            hindu
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            Education 教育:
        </td>
        <td style="text-align:left; width:50%">
            HNDIT
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            Marital Status 婚姻状况:
        </td>
        <td style="text-align:left; width:50%">
            single
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            No. of Children / Age 子女数目/年龄:
        </td>
        <td style="text-align:left; width:50%">
            0
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            No. of Brothers / Sister 兄妹数目:
        </td>
        <td style="text-align:left; width:50%">
            2
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
            I am the _ in the family 家中排行:
        </td>
        <td style="text-align:left; width:50%">
            big brother
        </td>
    </tr>
    <tr>
        <td style="text-align:left;">
             Advance 预支工资: RM
        </td>
        <td style="text-align:left; width:50%">
            ---
        </td>
    </tr>   
</table>
';




//tableexp
$tempBodyHtml .= '

<table style="width:50%; margin-left: 10px;" class="tblexp">

    <tr>
        <td colspan="2" style="text-align:left;">    
        </td>   
    </tr>

    <tr>
        <td colspan="2" style="text-align:left;">
             CONTACT NUMBER:834769379
        </td>
    </tr> 

    <tr>
        <td style="text-align:left;">
            Oversea Experience 海外经验:
        </td>
        <td style="text-align:left; width:50%">
            <input type="checkbox">
        </td>
    </tr> 

    <tr>
        <td colspan="2" style="text-align:left;">    
        </td>   
    </tr>

    <tr>
        <td style="text-align:left;">
            Local Experience 当地经验:
        </td>
        <td style="text-align:left; width:50%">
            <input type="checkbox">
        </td>
    </tr> 

    <tr>
        <td colspan="2" style="text-align:left;">    
        </td>   
    </tr>

    <tr>
        <td colspan="2" style="text-align:left;">
             CONTACT NUMBER:834769379
        </td>
    </tr> 

    <tr>
        <td colspan="2" style="text-align:left;">    
        </td>   
    </tr>

    <tr>
        <td style="text-align:left;">
            Housekeeping
        </td>
        <td style="text-align:left; width:50%">
            <input type="checkbox">
        </td>
    </tr> 

    <tr>
        <td style="text-align:left;">
            Care of Infant
        </td>
        <td style="text-align:left; width:50%">
            <input type="checkbox">
        </td>
    </tr> 

    <tr>
        <td style="text-align:left;">
            Care of Children
        </td>
        <td style="text-align:left; width:50%">
            <input type="checkbox">
        </td>
    </tr> 

    <tr>
        <td style="text-align:left;">
            Care of Elderly
        </td>
        <td style="text-align:left; width:50%">
            <input type="checkbox">
        </td>
    </tr> 
</table>
';


//text area
$tempBodyHtml .= '
    <textarea id="w3review" name="w3review" rows="30" cols="50">.</textarea>

';





//tblinterview
$tempBodyHtml .= '
    <table style="width:50%;" class="tblinterview">

    <tr>
        <td colspan="5" style="text-align:center;">    
            <strong><h3><i>面 试 评 价 Interview Appraisal</i></h3></strong>
        </td>   
    </tr>

    <tr>
        <td style="text-align:center; width:40%">
            
        </td>
        <td style="text-align:center; width:15%">
            差
            <br>
            Poor
        </td>
        <td style="text-align:center; width:15%">
            平
            <br>
            Fair
        </td>
        <td style="text-align:center; width:15%">
            好
            <br>
            GD
        </td>
        <td style="text-align:center; width:15%">
            优
            <br>
            V.GD
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            护理婴儿
            <br>
            Care of Babies
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            护理儿童
            <br>
            Care of Young Children
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            家务
            <br>
            Household Work
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            个性表现
            <br>
            Personality
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            仪容
            <br>
            Facial Expression
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            护理老人
            <br>
            Care of Elderly / Disable
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            女佣经验
            <br>
            Housemaid Exp.
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            能说英文
            <br>
            Spoken English
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            能说华文
            <br>
            Spoken Mandarin
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            明白英文
            <br>
            Understand Eng,
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            明白华文
            <br>
            Understand Mandarin
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            其他语言
            <br>
            Other Language
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; width:15%">
            <input type="checkbox">
        </td>
    </tr> 


    <tr>
        <td style="text-align:center; width:40%">
            怕狗
            <br>
            Afraid of Dog
        </td>
        <td colspan="2" style="text-align:left; width:30%">
            <input style="margin-left:20px;" type="checkbox">YES
        </td>
        <td colspan="2" style="text-align:left; width:30%">
            <input style="margin-left:20px;" type="checkbox">NO
        </td>
    </tr> 



    <tr>
        <td style="text-align:center; width:40%">
            照顾狗的经验
            <br>
            Exp. Taking Care of Dog
        </td>
        <td colspan="2" style="text-align:left; width:30%">
            <input style="margin-left:20px;" type="checkbox">YES
        </td>
        <td colspan="2" style="text-align:left; width:30%">
            <input style="margin-left:20px;" type="checkbox">NO
        </td>
    </tr> 
    </table>
';








//second page
//TABLE PREVIOUS EMPLOYMENT HISTORY
$tempBodyHtml .= '

<table style="width:100%;" class="tblpeh">
    <tr>
        <td colspan="4" style="text-align:center;">
            <strong>
                PREVIOUS EMPLOYMENT HISTORY
                <br>
                以往雇员工作记录
            </strong>
        </td>
    </tr>


    <tr>
        <td style="width:30%">
            Name of Employer 前雇主名称
        </td>
        <td style="VALIGN=TOP; width:20%">
            From – To 由/至
        </td>
        <td style=" VALIGN=TOP; width:20%">
            Salary 工资
        </td>
        <td style="VALIGN=TOP; width:30%">
            Reason of Leaving 离职理由
        </td>
    </tr> 
    <tr>
        <td style="text-align:left; width:30%">
            Location of Employer 前雇主地址
        </td>
        <td colspan="3" style="text-align:center; VALIGN=TOP; width:60%">
            Description of Job 工作性质
        </td>     
    </tr>
    <tr>
        <td style="width:30%">
            Name of Employer 前雇主名称
        </td>
        <td style="VALIGN=TOP; width:20%">
            From – To 由/至
        </td>
        <td style=" VALIGN=TOP; width:20%">
            Salary 工资
        </td>
        <td style="VALIGN=TOP; width:30%">
            Reason of Leaving 离职理由
        </td>
    </tr> 
    <tr>
        <td style="text-align:left; width:30%">
            Location of Employer 前雇主地址
        </td>
        <td colspan="3" style="text-align:center; VALIGN=TOP; width:60%">
            Description of Job 工作性质
        </td>     
    </tr>
    <tr>
        <td style="width:30%">
            Name of Employer 前雇主名称
        </td>
        <td style="VALIGN=TOP; width:20%">
            From – To 由/至
        </td>
        <td style=" VALIGN=TOP; width:20%">
            Salary 工资
        </td>
        <td style="VALIGN=TOP; width:30%">
            Reason of Leaving 离职理由
        </td>
    </tr> 
    <tr>
        <td style="text-align:left; width:30%">
            Location of Employer 前雇主地址
        </td>
        <td colspan="3" style="text-align:center; VALIGN=TOP; width:60%">
            Description of Job 工作性质
        </td>     
    </tr> 

    <tr>
        <td colspan="4" style="text-align:center;">
            <strong>
                PERSONAL PARTICULARS
                <br>
                个人资料
            </strong>
        </td>
    </tr>
    <tr>
        <td style="width:30% VALIGN=TOP;">
            Name of Spouse 配偶姓名
        </td>
        <td style="VALIGN=TOP; width:20%">
            Age 年龄
        </td>
        <td style=" VALIGN=TOP; width:20%">
            Spouse’s Occupation 配偶职业
        </td>
        <td style="VALIGN=TOP; width:30%">
            No. of Children 子女数目
        </td>
    </tr> 
    <tr>
        <td style="width:30% VALIGN=TOP;">
            Name of Father / Occupation
            父亲名字 / 职业
        </td>
        <td style="VALIGN=TOP; width:20%">
            Age 年龄
        </td>
        <td style=" VALIGN=TOP; width:20%">
            Name of Mother /
            Occupation
            母亲名字 / 职业
        </td>
        <td style="VALIGN=TOP; width:30%">
            Age 年龄
        </td>
    </tr> 
    <tr>
        <td colspan="4" style="VALIGN=TOP;">
            <strong>
            ADDRESS IN INDONESIA :
            <br>
            <br>
            印尼地址
            <br>
            </strong>
        </td>
    </tr>
    
    </table>

    ';

$tempBodyHtml .= '
<p style="text-align=center;">Please answer by (Yes) or (No) below to show which at the following duties you are willing to undertake and
which you have had experience of:-</p>
<br>
';





use Spipu\Html2Pdf\Html2Pdf;

try {
    $html2pdf = new Html2Pdf('P', 'A4', 'en',true, 'UTF-8', 0);
    $html2pdf->pdf->SetDisplayMode('fullpage');
    $html2pdf->setDefaultFont('stsongstdlight');
    $html2pdf->writeHTML($htmlimgContent);
    $html2pdf->writeHTML($tempBodyHtml);
    
    $html2pdf->output('/var/www/html/html-to-pdf/invoice.pdf', 'F');
} catch (Exception $ex) {
    echo $ex->getMessage();
}
?>