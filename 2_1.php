<!---�ļ�����2_1.php---->
<?php
/*************************���ñ���************************************/
$varint    = 1;                 //����һ����Ϊ$varint�����ͱ���
$varinteger = "4";              //����һ����Ϊ$varinteger���ַ������� 
$varstring = "С��";      //����һ����Ϊ$varstring���ַ�������
$varbool   = true;               //����һ����Ϊ$varbool�Ĳ����ͱ���
$varfloat  = 12.5;               //����һ����Ϊ$varfloat�ĸ����ͱ���
$vardelete = "delete";//����һ����Ϊ$varobject���ַ�������
/**
* ����һ����Ϊ$varsarray���������
* */
$varsarray = array(
	"1"=>"one",
	"2"=>"two"
);
//Ϊ�������һ����Ԫ��
$varsarray["3"] = "three";
/**
* ����һ����Ϊ$vardarray�Ķ�ά�������
* */
$vardarray = array(
	"cn"=>array("1"=>"һ","2"=>"��"),
	"en"=>array("1"=>"one","2"=>"two")
);
//����һ����
class testClass{
	var $_title = "���Ƕ������͵���ʾ";
	function test(){
		echo $this->_title;
	}
}
//ʵ�����࣬ȡ�ö������ͱ���
$newTest = new testClass();
//ȡ��һ����Դ���͵ı���
$fp = fopen("test.txt","w");
//����һ��NULL���͵ı���
$varnull = NULL;
//ɾ��һ������
unset($vardelete);
//ɾ��$varsarray������ָ����Ԫ��
unset($varsarray["3"]);
?>