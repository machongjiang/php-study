<!-----�ļ�����2_2.php----->
<?php
/*************************���ñ���************************************/
$varint    = 1;                 //����һ����Ϊ$varint�����ͱ���
$varinteger = "4";              //����һ����Ϊ$varinteger���ַ������� 
$varstring = "С��";      //����һ����Ϊ$varstring���ַ�������
$varbool   = true;               //����һ����Ϊ$varbool�Ĳ����ͱ���
$varfloat  = 12.5;               //����һ����Ϊ$varfloat�ĸ����ͱ���
$varobject = "will be an object";//����һ����Ϊ$varobject���ַ�������
$show_1    = "show_2";
$$show_1    = true;
$show_3    = NULL;
/**
* ����һ����Ϊ$varsarray���������
* */
$varsarray = array(
	"1"=>"one",
	"2"=>"two"
);
/**
* ����һ����Ϊ$vardarray�Ķ�ά�������
* */
$vardarray = array(
	"cn"=>array("1"=>"һ","2"=>"��"),
	"en"=>array("1"=>"one","2"=>"two")
);
echo "ʹ��gettype()�������鿴����ת��ǰ������<br>";
echo gettype($varobject)."<br>";
echo gettype($varinteger)."<br>";
echo gettype($varsarray)."<br>";
echo gettype($varint)."<br>";
echo gettype($vardarray)."<br>";
echo gettype($show_3)."<br>";
/*************************��������ת��************************************/
settype($varobject,"object");         //ʹ��settype()��������$varobject������ת��Ϊ��������
$varinteger     = (int)$varinteger;   //ǿ��ת�����ͣ���$varinteger������ת��Ϊ����
$varsarray      = (object)$varsarray; //ǿ������ת������$varsarrayת��Ϊ��������
$varint  = "$varint";          //�����ַ�������ķ�������$varintת��Ϊ�ַ�����
$vardarray        = (int)$vardarray;    //ǿ������ת������$vardarrayת��Ϊ����
/*************************�ɱ�������ڱ�������ת��************************************/
$show_3 = $$show_1;
/*************************�鿴��������************************************/
echo "<br>ʹ��gettype()�������鿴����ת���������<br>";
echo gettype($varobject)."<br>";
echo gettype($varinteger)."<br>";
echo gettype($varsarray)."<br>";
echo gettype($varint)."<br>";
echo gettype($vardarray)."<br>";
echo gettype($show_3);
?>