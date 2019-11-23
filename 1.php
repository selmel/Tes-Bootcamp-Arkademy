<?php 
// membuat class biodata
 class Biodata{
 	// menyimpan data dalam array
 	public $data = [];
 	// fungsi nama
 	public $nama=" Aris";
	public $age=" 22";
 	public function nama()
 	{
    return "Nama $this->nama";
 	}
 	public function age()
 	{
     return " umur $this->age";
 	}
 	// fungsi alamat
 	public function alamat($alamat)
 	{
 		$this->data['address'] = $alamat;
 		return $this;
 	}
 	// fungsi hobi
 	public function hobi($hobi = array())
 	{
 		$this->data['hobbies'] = $hobi;
 		return $this;
 	}
 	
 	// fungsi menikah
 	public function menikah($menikah)
 	{
 		$this->data['is_married'] = $menikah;
 		return $this;
 	}
 	
 	// fungsi sekolah
 	public function sekolah($sekolah = array())
 	{
 		$this->data['school'] = $sekolah;
 		return $this;
 	}
 	// fungsi kemampuan
 	public function kemampuan($kemampuan = array())
 	{
 		$this->data['skills'] = $kemampuan;
 		return $this;
 	}
 	// fungsi konvert ke json
 	public function konjson(){
 		return json_encode($this->data, JSON_PRETTY_PRINT);
 	}
 	
}
$biodata 	= new Biodata();
$alamat		= "Jalan Sunter jaya sky iv";
$hobi 		= ['Sepedah','renang','Membaca','Ngoding'];
$sekolah	= [
				$university[0]  = "universitas gunadarma",
				$major[0]     	= "Teknik Informatika ",
				$yearin[0]   	= "2015",
				$yearout[0]  	= "2019",
				$university[1]  = "SMK N 1 jakarta",
				$major[1]     	= "Teknik Komputer dan Jaringan ",
				$yearin[1]   	= "2012",
				$yearout[1]  	= "2015",
			  ];
$kemampuan	= [
				
						$skill_name[0] = "Networking",
						$skill_name[1] = "pweb",
						$level[0] = "Advance",
						$level[1] = "expert",
					
			  ];
echo $biodata->nama();
echo $biodata->age();
print_r($biodata->alamat($alamat)
				->hobi($hobi)
				->menikah(false)
				->sekolah($sekolah)
				->kemampuan($kemampuan)
				->konjson()
);
?>