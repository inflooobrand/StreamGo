<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use DB;
class Author extends Model{

	public $timestamp=false;

	protected $table = 'author_table';
	protected $fillable=[
		'author_name',
		'author_msg',
	];

	public function getAuthorTable(){
		$users = DB::table('author_table as au')->select(['au.author_name','au.author_msg',DB::raw("DATE_FORMAT(au.created_at, '%d-%b-%Y') as created_at")])->get();
		return $users;
	}
	public function getAuthorTableByID($id){
		$users = DB::table('author_table as au')
				->select(['au.author_name','au.author_msg',DB::raw("DATE_FORMAT(au.created_at, '%d-%b-%Y') as created_at")])
				->where('au.id',$id)->first();
		return $users;
	}
}
