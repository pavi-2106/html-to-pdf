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
}

.img {
    margin:10px;
    
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
    margin-left:10px;
    height:3px;
}

.tblexp, .tblexp th, .tblexp td { 
    border-collapse: collapse;
    border: 1px solid;
    padding: 5px;
    align-items: left;
    justify-contents:left;
    height:3px;
    margin-right:40px;
}

.tblinterview, .tblinterview th, .tblinterview td {
    border-collapse: collapse;
    border: 1px solid;
    padding: 5px;
    align-items: center;
    justify-contents:center;
    margin-right:10px;
    height:5px;
}


.textarea{
    justify-contents:center;
    align-items:center;
    margin-left:20px;
    height:10%;
}

.tblpeh, .tblpeh th, .tblpeh td {
    border-collapse: collapse;
    border: 1px solid;
    padding: 5px;
    margin:40px;
    height:35px;
    margin-bottom:0;
}

.tbl_willing_exp, .tbl_willing_exp th, .tbl_willing_exp td {  
    border-collapse: collapse;
     padding: 5px;
     margin:40px;
     margin-top:0;
     margin-bottom:40px;
    }

.tbl_gk, .tbl_gk th, .tbl_gk td {  
    border-collapse: collapse;
    padding: 5px;
    margin:40px;
    margin-top:0;
}

.tbl_sign, .tbl_sign th, .tbl_sign td {  
    border-collapse: collapse;
     padding: 5px;
}
</style>';


// Image
$htmlimgContent .= '
<div class="img-container" >
    <img src="/var/www/html/html-to-pdf/pic.jpeg" alt="Image description" class="img" style="width:97%;">
</div>
';

$tempBodyHtml .= '
<h1 style="text-align:center; margin:0;"><strong>印尼女佣资料表</strong></h1>
';

$tempBodyHtml .= '
<h1 style="text-align:center;  margin:0;"><strong><u> APPLICANT’S  QUALIFICATION HIGHLIGHTS</u></strong></h1>
<br>
';



//first page
//tblinvitem
$tempBodyHtml .= '

<table style="border-collapse: collapse; width: 100%; ">
    <tbody>
        <tr style="margin-bottom:0; height:50%;">

            <td style="width: 50%;">

                        <table style="width:60%; margin-left:40px;" class="tblInvItem">
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
        
            </td>


            <td style="width: 50%;">

                    <table style="width:95%; height:100%;" class="tblexp">

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
                            Recommended for: (“X” means she can)
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
        

            </td>


        </tr>





        <tr style="margin-bottom:0px; height:50%;">

            <td style="width:50%;  height:50%;">

                    <table style="width:60%; margin-left:40px; border-collapse: collapse; border: 1px solid;">
                        <tr>
                            <td>
                                <textarea id="w3review" name="w3review" rows="34" cols="40">.</textarea>
                            </td>
                        </tr>
                    </table>
                    
            </td>



            <td style="width:50%; height:50%;">


                    <table style="width:95%; height:50%;" class="tblinterview">

                    <tr>
                        <td colspan="5" style="text-align:center;">    
                            <strong><h5><i>面 试 评 价 Interview Appraisal</i></h5></strong>
                        </td>   
                    </tr>

                    <tr>
                        <td style="text-align:center; width:40%">
                            
                        </td>
                        <td style="text-align:center; width:15%">

                            Poor
                        </td>
                        <td style="text-align:center; width:15%">
                           
                            Fair
                        </td>
                        <td style="text-align:center; width:15%">
                            
                            GD
                        </td>
                        <td style="text-align:center; width:15%">
                            
                            V.GD
                        </td>
                    </tr> 


                    <tr>
                        <td style="text-align:center; width:40%">
                            
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
            </td>

        </tr>
    </tbody>
</table>
';




//second page
//TABLE PREVIOUS EMPLOYMENT HISTORY
$tempBodyHtml .= '

<table style="width: 85%; margin-left:40px;" class="tblpeh">
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
<p style="text-align=left; font-size: larger; margin-left:40px;">Please answer by (Yes) or (No) below to show which at the following duties you are willing to undertake and
which you have had experience of:-</p>
<br>
';



//tbl_willing_exp
$tempBodyHtml .= '
<table class="tbl_willing_exp" style="width:90%">
    <tr>
        <td colspan="2" style="text-align:left; width:30%">
            
        </td>
        <td style="text-align:center; width:10%">
            Willing
            <br>
            愿意
        </td>
        <td style="text-align:center; width:10%">
            Exp
            <br>
            有经验
        </td>
        <td colspan="2" style="text-align:left; width:30%">
           
        </td>
        <td style="text-align:center; width:10%">
            Willing
            <br>
            愿意
        </td>
        <td style="text-align:center; width:10%">
            Exp
            <br>
            有经验
        </td>   
    </tr>
    

    
    <tr>
        <td colspan="2" style="text-align:left; width:30%">
            1.Care of babies aged 0-3 Months.
            <br>
            照顾 0-3 个月婴儿
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10% ">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10% ">
            <input type="checkbox">
        </td>
        <td colspan="2" style="text-align:left; width:30%">
            9.Operate Vacuum Cleaner
            <br>
            吸尘机操作
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10% ">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10% ">
            <input type="checkbox">
        </td>   
    </tr>



    <tr>
        <td colspan="2" style="text-align:left; width:30%">
            2.Care of babies aged 3-12 Months.  
            <br>
            照顾 3-12 个月婴儿
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td colspan="2" style="text-align:left; width:30%">
            10.Operate Microwave Oven
            <br>
            微波炉操作
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>   
    </tr>


    <tr> 
        <td colspan="2" style="text-align:left; width:30%">
            3.Care of children aged 1-5 Years.  
            <br>
            照顾年龄 1-5 岁孩子
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td colspan="2" style="text-align:left; width:30%">
            11.Washing Laundry By Hand
            <br>
            用手洗衣服
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>   
    </tr>


    <tr>
        <td colspan="2" style="text-align:left; width:30%">
            4.Care of children aged 5-10 Years.
            <br>
            照顾年龄 5-10 岁小孩
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td colspan="2" style="text-align:left; width:30%">
            12.Ironing
            <br>
            熨衣服
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>   
    </tr>
    

    <tr>
    <td colspan="2" style="text-align:left; width:30%">
        5.Care of children over 10 Years.
        <br>
        照顾年龄 10 岁以上小孩
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td colspan="2" style="text-align:left; width:30%">
        13.General Cooking
        <br>
        简单烹饪
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>   
</tr>


<tr>
    <td colspan="2" style="text-align:left; width:30%">
        6.Care of Invalid.
        <br>
        照顾残弱人士
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td colspan="2" style="text-align:left; width:30%">
        14.Care of Elderly
        <br>
        照顾老人
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>   
</tr>



<tr>
    <td colspan="2" style="text-align:left; width:30%">
        7.General Housework
        <br>
        一般家务工作
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td colspan="2" style="text-align:left; width:30%">
        15.Care of Pets ( Cat / Dog)
        <br>
        照顾猫 / 狗
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>   
</tr>



<tr>
    <td colspan="2" style="text-align:left; width:30%">
        8.Operate Washing Machine
        <br>
        洗衣机操作
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td colspan="2" style="text-align:left; width:30%">
        16.Wash Car
        <br>
        清洁车辆
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>
    <td style="text-align:center; border-bottom:1px solid black; width:10%">
        <input type="checkbox">
    </td>   
</tr>
</table>
';   


//general informations
$tempBodyHtml .= '
<br>
<h1 style="text-align:center; margin:40px; margin-top:40px;"><strong><u><i> GENERAL INFORMATION </i></u></strong></h1>
';

// table general information
$tempBodyHtml .= '
<table class="tbl_gk" style="width:90%;">
    <tr>
        <td style="text-align:center; width:80%">
            <strong>QUESTIONS</strong>
        </td>
        <td style="text-align:center; width:10%">
            <strong>YES</strong>
        </td>
        <td style="text-align:center; width:10%">
            <strong>NO</strong>
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            1.Can you promise not to use the telephone without your employer’s permission?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            2.Are you prepared to eat the type of food that your employer provides?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            3. Are you willing to accept the non-working days set up by your employer?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            4. Can you promise NOT to ask for an advance salary from your employer?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            5. Do you smoke?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            6.Have you undergone any operation before?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            7.Do you suffer from any skin disease?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            8.Are you willing to prepare / handle pork?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black;  width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            9.Can you eat pork?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            10.Are you willing to work overtime with compensation?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

    <tr>
        <td style="text-align:left; width:80%">
            11.Are you willing to share a room with children or an elderly?
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
        <td style="text-align:center; border-bottom:1px solid black; width:10%">
            <input type="checkbox">
        </td>
    </tr>

</table>
';

//confirmation
$tempBodyHtml .= '
<p style="text-align=left; font-size: larger; margin-left:40px; margin-top:40px; margin-right:30px;">
I hereby confirm that all the information and answers given are true and correct and that any deliberate
falsification of information may result in my being repatriated back to the country of origin at my own expense.
</p>
<br>
';





//tbl_sign
$tempBodyHtml .= '
<table class="tbl_sign" style="width:100%; margin-left:50px;">

    <tr>
        <td style="width:50%;"><p>_______________________</p></td>
        <td style="width:50%;"><p  style="margin-left:40px;">________________________</p></td>
    </tr>
    <tr>
        <td style="width:50%;"> <p>Interviewee’s Signature</p></td>
        <td style="width:50%;"><p  style="margin-left:40px;">Date:</p></td>
    </tr>

    <tr>
        <td style="width:50%;"><p>_______________________</p></td>
        <td style="width:50%;"><p  style="margin-left:40px;">_______________________</p></td>
    </tr>
    <tr>
        <td style="width:50%;"> <p>Interviewer’s Signature</p></td>
        <td style="width:50%;"><p   style="margin-left:40px;">Date:</p></td>
    </tr>
    
</table>


                
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
