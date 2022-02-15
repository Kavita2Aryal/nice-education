<?php

namespace App\Custom\Traits;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

trait Fileable
{
	public function deleteFile(string $columnName = 'file'): void
	{
		Storage::delete($this->filePath($columnName));
	}

	public function fileUploadFolder(string $columnName = 'file'): string
	{
		$className  = Str::kebab(class_basename($this));
		$columnName = Str::plural($columnName);

		return "files/{$className}/{$columnName}";
	}

	public function fileUrl(string $columnName = 'file'): string
	{
		return myAsset('storage/' . $this->filePath($columnName));
	}

	public function fileType(string $columnName = 'file'): string
	{
		try {
			return mime_content_type('storage/' . $this->filePath($columnName));
		} catch (\Throwable $th) {
			return '';
		}
	}

	public function fileExtension(string $columnName = 'file'): string
	{
		try {
			return pathinfo('storage/' . $this->filePath($columnName), PATHINFO_EXTENSION);
		} catch (\Throwable $th) {
			return '';
		}
	}

	private function filePath(string $columnName): string
	{
		try {
			$originalName = $this->attributes[$columnName];
			$uploadFolder = $this->fileUploadFolder($columnName);

			return "{$uploadFolder}/{$originalName}";
		} catch (\Throwable $th) {
			return '';
		}
	}
}
