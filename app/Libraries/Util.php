<?php

namespace App\Libraries;

use \stdClass;
use Illuminate\Support\Facades\Lang;
use Config;
//use App\Models\PostMeta;

class Util {

	public static function orderRef($prefix='', $length=10)
	{
		$str = date('ymd').strtotime(date('His'));
		$str = $prefix.substr(str_pad($str, ($length - strlen($prefix)), '0', STR_PAD_LEFT), -($length - strlen($prefix)));
		return $str;
	}
	
	public static function clientLocation($ip)
	{
		$url = "https://api.ipdata.co/{$ip}?api-key=".env('IPDATA_API_KEY');
		return json_decode(file_get_contents($url, false, stream_context_create(['http' => ['ignore_errors' => true]])));
	}
	
	public static function postMeta($data=null)
	{
		$meta = PostMeta::where('url', url()->current())->first();
		
		if (empty($meta) && !is_null($data)) {
			$meta = new stdClass();
			if (is_string($data)) {
				$meta->meta_title = $data;
			}
			else if (is_object($data)) {
				if (!empty($data->meta_title)) {
					$meta->meta_title = $data->meta_title;
				}
				else if (!empty($data->title)) {
					$meta->meta_title = $data->title;
				}
				else if (!empty($data->name)) {
					$meta->meta_title = $data->name;
				}
				if (!empty($data->meta_key)) {
					$meta->meta_key = $data->meta_key;
				}
				if (!empty($data->meta_desc)) {
					$meta->meta_desc = $data->meta_desc;
				}
			}
		}
		
		return $meta;
	}
	
	public static function toc($html)
	{
		preg_match_all('/<h([1-6])*[^>]*>(.*?)<\/h[1-6]>/', $html, $matches);
		
		$index = "<ul>";
		$prev = 2;
		
		foreach ($matches[0] as $i => $match) {
			$curr = $matches[1][$i];
			$text = strip_tags($matches[2][$i]);
			$slug = strtolower(str_replace("--", "-", preg_replace('/[^\da-z]/i', '-', $text)));
			$anchor = '<a name="'.$slug.'">'.$text.'</a>';
			$html = str_replace($text, $anchor, $html);
			
			$prev <= $curr ?: $index .= str_repeat('</ul>', ($prev - $curr));
			$prev >= $curr ?: $index .= "<ul>";
			
			$index .= '<li><a href="#'.$slug.'">'.$text.'</a></li>';
			$prev = $curr;
		}
		
		$index .= "</ul>";
		$index = str_replace("<ul><ul>", "<ul>", $index);
		$index = str_replace("<\ul><\ul>", "<\ul>", $index);
		
		return (object)["html" => $html, "index" => $index, "heading" => $matches[0]];
	}

	public static function objectLanguages($model, $object)
	{
		if ($object->default_lang_id != 0) {
			$lang_objects = $model::where('id', $object->default_lang_id)->orWhere('default_lang_id', $object->default_lang_id)->get();
		} else {
			$lang_objects = $model::where('id', $object->id)->orWhere('default_lang_id', $object->id)->get();
		}
		
		return $lang_objects;
	}
	
	public static function urlLanguages($name, $other_name=null)
	{
		$languages = collect();
		foreach (Config::get('app.all_language') as $lang) {
			$languages->push(url(($lang == Config::get('app.default_locale') ?  '/' : $lang.'/' ).__('routes.'.$name, [], $lang, true).(!empty($other_name) ? '/'.__('routes.'.$other_name, [], $lang, true) : '')));
		}
		
		return $languages;
	}
}
?>