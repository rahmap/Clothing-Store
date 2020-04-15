<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------

	public $uploadProduk = [
		'fotoDepan'     => 'uploaded[fotoDepan]|mime_in[fotoDepan,image/jpg,image/jpeg,image/gif,image/png]|max_size[fotoDepan,4096]',
		'fotoBelakang'     => 'uploaded[fotoBelakang]|mime_in[fotoBelakang,image/jpg,image/jpeg,image/gif,image/png]|max_size[fotoBelakang,4096]',
		'fotoRelatedDepan'     => 'uploaded[fotoRelatedDepan]|mime_in[fotoRelatedDepan,image/jpg,image/jpeg,image/gif,image/png]|max_size[fotoRelatedDepan,4096]',
		'fotoRelatedBelakang'     => 'uploaded[fotoRelatedBelakang]|mime_in[fotoRelatedBelakang,image/jpg,image/jpeg,image/gif,image/png]|max_size[fotoRelatedBelakang,4096]',
		'keterangan'     => 'required|min_length[10]',
		'keteranganTumb'     => 'required|min_length[10]|max_length[100]',
		'judulProduk'     => 'required|min_length[10]|max_length[100]',
		'brandProduk'     => 'required|min_length[3]',
		'hargaProduk'     => 'required|min_length[3]',
		'diskonProduk'     => 'required|min_length[1]',
		'kategori'     => 'required'
	];

}
