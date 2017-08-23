<?php
/**
 * ����תXML��
 * ʹ�÷������������е�parse����,��������ͽڵ�����
 */
class ArrayToXML {
    //�ĵ�����
����private static $doc = NULL;
    //�汾��
����private static $version = '1.0';
    /**
     * ��ʼ���ĵ��汾������
     * 
     * @param string $version   �汾��
     * @param string $encoding  XML����
     */
    public static function init($version, $encoding) {
    ����self::$doc = new DomDocument($version, $encoding);
    ����self::$doc->formatOutput = true;
    }
      
    /**
     * ת�����鵽XML
     * @param array $array      Ҫת��������
     * @param string $rootName  �ڵ�����
     * @param string $version   �汾��
     * @param string $encoding  XML����
     * @return string
     */
    public static function parse($array, $rootName = 'root', $version = '1.0', $encoding = 'UTF-8') {
        self::init($version, $encoding);
        //ת��
        $node = self::convert($array, $rootName);
        self::$doc->appendChild($node);
        return self::$doc->saveXML();
    }
      
    /**
     * �ݹ�ת��
     * @param array $array      ����
     * @param string $nodeName  �ڵ�����
     * @return object (DOMElement)
     */
    private static function convert($array, $nodeName) {
        if (!is_array($array)) return false;
        //�������ڵ�
        $node = self::createNode($nodeName);
        //ѭ������
        foreach ($array as $key => $value) {
            $element = self::createNode($key);
            //����������飬�򴴽��ڵ��ֵ
            if (!is_array($value)) {
               $element->appendChild(self::createValue($value));
                $node->appendChild($element);
            } else {
                //��������飬��ݹ�
                $node->appendChild(self::convert($value, $key, $element));
            }                       
        }
        return $node;
    }
���� private static function createNode($name) {
        $node = NULL;
        //������ַ������򴴽��ڵ�
        if (!is_numeric($name)) {
            $node = self::$doc->createElement($name);
        } else {
            //��������֣��򴴽�Ĭ��item�ڵ�
            $node = self::$doc->createElement('item');
        }
        return $node;
    }
      
    /**
     * �����ı��ڵ�
     * @param string || bool || integer $value
     * @return object (DOMText || DOMCDATASection );
     */
    private static function createValue($value) {
        $textNode = NULL;
        //�����bool�ͣ���ת��Ϊ�ַ���
        if (true === $value || false === $value) {
            $textNode = self::$doc->createTextNode($value ? 'true' : 'false');
        } else {
            //�������HTML��ǩ���򴴽�CDATA�ڵ�
            if (strpos($value, '<') > -1) {
                $textNode = self::$doc->createCDATASection($value);
            } else {
                $textNode = self::$doc->createTextNode($value);
            }
        }
        return $textNode;
    }
}
?>