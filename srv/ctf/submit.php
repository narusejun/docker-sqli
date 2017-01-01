<?php
	$flags = [
		"p1" => "FLAG_d694c8f70efe239091d69547cbb77206b461fa67",
		"p2" => "FLAG_079a8709af186649e146c3bbd985e2fa3327f1da",
		"p3" => "FLAG_9b102ea7117bcccf54ce89a7b02eb7b3c6e8b9eb",
		"p4" => "FLAG_b6f1aa0745437042c3ebe632a150de8db5f4a5d5",
		"p5" => "FLAG_5b872c183caa63cdf3b3d12194c5552e942e7d51",
		"p6" => "FLAG_82fa795356fe912c474719395c2f4274b7fe31dd",
		"p7" => "FLAG_3d257c292ed63308e90449356f4bac7e2ac3e50f",
		"p8" => "FLAG_0ccfd1277589de22b0e664888c42c614e9ceed94",
		"p9" => "FLAG_093de307d369df8475d7ef7d5d588494edf89fcd",
		"p10" => "FLAG_5676cf4233b6fb78bbdad274c8b68e866a66518f",
		"p11" => "FLAG_77e4aea4a8db8b9771bba606f7b58312bf96c170",
		"p12" => "FLAG_1badbf17c9e31aba02fd70e86c101e5b476aa066",
		"p13" => "FLAG_e140b4acd6a6634aa088f17e8614f4bfad2103f5",
		"p14" => "FLAG_2191f8f34585abedd145537eef9a8840869f948c",
		"p15" => "FLAG_5d00ba04281b4e14cd1abdbd3130cff5ad14fb21",
		"p16" => "FLAG_88657c39bf59a454b147b6c966d0b34174d38945",
		"p17" => "FLAG_63468b3f18a7abaaa2576bc963215d1a2d8e0c78",
		"p18" => "FLAG_a401ff881709171f62ab7859fd74246cdddccc07",
		"p19" => "FLAG_392b3d013072d36a7f1e1d4f3510a44f593cf6e5",
		"p20" => "FLAG_05facfc8f6e86324a8ac6d2f16ecb47924e652ae",
		"p21" => "FLAG_70a664b782b2182e6c60be0b0b385d15a430fe69",
	];
	if(isset($_GET["id"]) && isset($_GET["flag"]) && isset($flags[$_GET["id"]]) && $_GET["flag"] === $flags[$_GET["id"]]){
		echo("ok");
	}else{
		echo("ng");
	}
?>