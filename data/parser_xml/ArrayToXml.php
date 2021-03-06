<?php
class Response {
    /*
    *按json格式返回数据
    *@param int $code 状态码
    *@param string $message 提示信息
    *@param arrya $data 数据
    *return string
    */
     public static function getJson($code ,$message = '',$data = array()) {
        if(!is_numeric($code)) {
            return '';
        }
        $arr = array(
            'code' => $code,
            'message' => $message,
            'data' => $data
        );
        echo json_encode($arr);
        exit;
     }
     /*
    *按xml格式返回数据
    *@param int $code 状态码
    *@param string $message 提示信息
    *@param arrya $data 数据
    *return string
    */
     public static function getXml($code,$message = '',$data = array()) {
        if(!is_numeric($code)) {
            return '';
        }
        header("Content-Type:text/xml");
        $result  = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n";
        $result .= "<root>\n";
        $result .= "<code>" . $code . "</code>\n";
        $result .= "<message>" . $message . "</message>\n";
        $result .= "<data>\n" . self::getData($data) . "</data>\n";
        $result .= "</root>";
        echo $result;
        exit;
    }

 public static function getXml2($code,$message = '',$data = array()) {
        /*if(!is_numeric($code)) {
            return '';
        }
        header("Content-Type:text/xml");
        $result  = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n";
        $result .= "<root>\n";
        $result .= "<code>" . $code . "</code>\n";
        $result .= "<message>" . $message . "</message>\n";
        $result .= "<data>\n" . self::getData($data) . "</data>\n";
        $result .= "</root>";*/

        header("Content-Type:text/xml");
       /* $result  = "<?xml version=\"1.0\" encoding=\"utf-8\" ?>\n";
        $result .= "<book name='上海作业' version='2017082201'>\n" . self::getData($data) . "</book>\n";*/
        $result = "<?xml version='1.0' encoding='UTF-8'?>
<book name='上海作业' version='2017082201'>
    <node name='Unit 1' book_unit_id='10289' type='node'>
        <node name='I' level_id='30732' type='level'>
            <item name='Unit 1-1' item_id='40750' type='item' url_video='六年级/英语/30732/Unit 1-1.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/01 I/Unit 1-1.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/01 I/Unit 1-1.mp4' credit='100' />
        </node>
        <node name='II' level_id='30733' type='level'>
            <item name='Unit 1-2' item_id='40751' type='item' url_video='六年级/英语/30733/Unit 1-2.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/02 II/Unit 1-2.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/02 II/Unit 1-2.mp4' credit='100' />
            <item name='Unit 1-3' item_id='40752' type='item' url_video='六年级/英语/30733/Unit 1-3.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/02 II/Unit 1-3.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/02 II/Unit 1-3.mp4' credit='100' />
            <item name='Unit 1-4' item_id='40753' type='item' url_video='六年级/英语/30733/Unit 1-4.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/02 II/Unit 1-4.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/02 II/Unit 1-4.mp4' credit='100' />
        </node>
        <node name='III' level_id='30734' type='level'>
            <item name='Unit 1-5' item_id='40754' type='item' url_video='六年级/英语/30734/Unit 1-5.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/03 III/Unit 1-5.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/03 III/Unit 1-5.mp4' credit='100' />
        </node>
        <node name='IV' level_id='30735' type='level'>
            <item name='Unit 1 - 6' item_id='40755' type='item' url_video='六年级/英语/30735/Unit 1 - 6.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/04 IV/Unit 1 - 6.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/04 IV/Unit 1 - 6.mp4' credit='100' />
        </node>
        <node name='V' level_id='30736' type='level'>
            <item name='Unit 1 - 7' item_id='40756' type='item' url_video='六年级/英语/30736/Unit 1 - 7.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/05 V/Unit 1 - 7.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/05 V/Unit 1 - 7.mp4' credit='100' />
        </node>
        <node name='VI' level_id='30737' type='level'>
            <item name='Unit 1  -8' item_id='40757' type='item' url_video='六年级/英语/30737/Unit 1  -8.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1  -8.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1  -8.mp4' credit='100' />
            <item name='Unit 1 - 9' item_id='40758' type='item' url_video='六年级/英语/30737/Unit 1 - 9.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1 - 9.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1 - 9.mp4' credit='100' />
            <item name='Unit 1－10' item_id='40759' type='item' url_video='六年级/英语/30737/Unit 1－10.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1－10.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1－10.mp4' credit='100' />
            <item name='Unit 1－11' item_id='40760' type='item' url_video='六年级/英语/30737/Unit 1－11.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1－11.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1－11.mp4' credit='100' />
            <item name='Unit 1－12' item_id='40761' type='item' url_video='六年级/英语/30737/Unit 1－12.mp4' url_video_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1－12.png' url_img='六年级/英语/上海作业/视频与课件/01 Unit 1/06 VI/Unit 1－12.mp4' credit='100' />
        </node>
    </node>
    <node name='Unit 2' book_unit_id='10290' type='node'>
        <node name='I' level_id='30738' type='level'>
            <item name='Unit 2-1' item_id='40762' type='item' url_video='六年级/英语/30738/Unit 2-1.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/01 I/Unit 2-1.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/01 I/Unit 2-1.mp4' credit='100' />
        </node>
        <node name='II' level_id='30739' type='level'>
            <item name='Unit 2-2' item_id='40763' type='item' url_video='六年级/英语/30739/Unit 2-2.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/02 II/Unit 2-2.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/02 II/Unit 2-2.mp4' credit='100' />
            <item name='Unit 2-3' item_id='40764' type='item' url_video='六年级/英语/30739/Unit 2-3.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/02 II/Unit 2-3.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/02 II/Unit 2-3.mp4' credit='100' />
            <item name='Unit 2－4' item_id='40765' type='item' url_video='六年级/英语/30739/Unit 2－4.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/02 II/Unit 2－4.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/02 II/Unit 2－4.mp4' credit='100' />
        </node>
        <node name='III' level_id='30740' type='level'>
            <item name='Unit 2－5' item_id='40766' type='item' url_video='六年级/英语/30740/Unit 2－5.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/03 III/Unit 2－5.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/03 III/Unit 2－5.mp4' credit='100' />
        </node>
        <node name='IV' level_id='30741' type='level'>
            <item name='Unit 2－6' item_id='40767' type='item' url_video='六年级/英语/30741/Unit 2－6.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/04 IV/Unit 2－6.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/04 IV/Unit 2－6.mp4' credit='100' />
        </node>
        <node name='V' level_id='30742' type='level'>
            <item name='Unit 2-7' item_id='40768' type='item' url_video='六年级/英语/30742/Unit 2-7.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/05 V/Unit 2-7.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/05 V/Unit 2-7.mp4' credit='100' />
        </node>
        <node name='VI' level_id='30743' type='level'>
            <item name='Unit 2-10' item_id='40769' type='item' url_video='六年级/英语/30743/Unit 2-10.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-10.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-10.mp4' credit='100' />
            <item name='Unit 2-11' item_id='40770' type='item' url_video='六年级/英语/30743/Unit 2-11.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-11.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-11.mp4' credit='100' />
            <item name='Unit 2-12' item_id='40771' type='item' url_video='六年级/英语/30743/Unit 2-12.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-12.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-12.mp4' credit='100' />
            <item name='Unit 2-8' item_id='40772' type='item' url_video='六年级/英语/30743/Unit 2-8.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-8.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-8.mp4' credit='100' />
            <item name='Unit 2-9' item_id='40773' type='item' url_video='六年级/英语/30743/Unit 2-9.mp4' url_video_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-9.png' url_img='六年级/英语/上海作业/视频与课件/02 Unit 2/06 VI/Unit 2-9.mp4' credit='100' />
        </node>
    </node>
    <node name='Unit 3' book_unit_id='10291' type='node'>
        <node name='I' level_id='30744' type='level'>
            <item name='Unit 3-1' item_id='40774' type='item' url_video='六年级/英语/30744/Unit 3-1.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/01 I/Unit 3-1.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/01 I/Unit 3-1.mp4' credit='100' />
        </node>
        <node name='II' level_id='30745' type='level'>
            <item name='Unit 3-2' item_id='40775' type='item' url_video='六年级/英语/30745/Unit 3-2.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/02 II/Unit 3-2.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/02 II/Unit 3-2.mp4' credit='100' />
            <item name='Unit 3-3' item_id='40776' type='item' url_video='六年级/英语/30745/Unit 3-3.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/02 II/Unit 3-3.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/02 II/Unit 3-3.mp4' credit='100' />
            <item name='Unit 3－4' item_id='40777' type='item' url_video='六年级/英语/30745/Unit 3－4.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/02 II/Unit 3－4.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/02 II/Unit 3－4.mp4' credit='100' />
        </node>
        <node name='III' level_id='30746' type='level'>
            <item name='Unit 3－5' item_id='40778' type='item' url_video='六年级/英语/30746/Unit 3－5.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/03 III/Unit 3－5.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/03 III/Unit 3－5.mp4' credit='100' />
        </node>
        <node name='IV' level_id='30747' type='level'>
            <item name='Unit 3－6' item_id='40779' type='item' url_video='六年级/英语/30747/Unit 3－6.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/04 IV/Unit 3－6.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/04 IV/Unit 3－6.mp4' credit='100' />
        </node>
        <node name='V' level_id='30748' type='level'>
            <item name='Unit 3－7' item_id='40780' type='item' url_video='六年级/英语/30748/Unit 3－7.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/05 V/Unit 3－7.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/05 V/Unit 3－7.mp4' credit='100' />
        </node>
        <node name='VI' level_id='30749' type='level'>
            <item name='Unit 3－10' item_id='40781' type='item' url_video='六年级/英语/30749/Unit 3－10.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－10.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－10.mp4' credit='100' />
            <item name='Unit 3－11' item_id='40782' type='item' url_video='六年级/英语/30749/Unit 3－11.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－11.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－11.mp4' credit='100' />
            <item name='Unit 3－12' item_id='40783' type='item' url_video='六年级/英语/30749/Unit 3－12.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－12.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－12.mp4' credit='100' />
            <item name='Unit 3－8' item_id='40784' type='item' url_video='六年级/英语/30749/Unit 3－8.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－8.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－8.mp4' credit='100' />
            <item name='Unit 3－9' item_id='40785' type='item' url_video='六年级/英语/30749/Unit 3－9.mp4' url_video_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－9.png' url_img='六年级/英语/上海作业/视频与课件/03 Unit 3/06 VI/Unit 3－9.mp4' credit='100' />
        </node>
    </node>
</book>";
        echo $result;
        exit;
     }


     /*
    *将$data转换为xml字符串
    *@param arrya $data 数据
    *return string
    */
     private static function getData($data = array()) {
        $str = '';
        foreach ($data as $key => $value) {
            $s = '';
            if(is_numeric($key)) {
                $s = " id='" . $key . "'";
                $key = "item";
            }
            $str .= "<" . $key . $s .">";
            $str .= is_array($value) ? "\n" . self::getData($value) : $value; 
            $str .= "</" .$key . ">\n";
        }
        return $str;
     }
}