<?php
  
namespace App\Traits;

use Illuminate\Support\Facades\Storage;
  
trait UploadFile 
{
    /**
     * Set path root when upload file.
     *
     * @var string
     */
    protected $baseDisk = 'public';

    /**
     * Set path root when upload file.
     *
     * @var string
     */
    protected $unkownPath = 'unkown';

    /**
     * Set path image folder when upload image.
     *
     * @var string
     */
    protected $imagePath = 'images';
    
    /**
     * Set path excel folder when upload image.
     *
     * @var string
     */
    protected $excelPath = 'excels';

    /**
     * Set path pdf folder when upload image.
     *
     * @var string
     */
    protected $pdfPath = 'pdfs';

    /**
     * Set path word folder when upload image.
     *
     * @var string
     */
    protected $wordPath = 'words';

    /**
     * Set path word folder when upload image.
     *
     * @var string
     */
    protected $qrcodePath = 'qrcode';

    /**
     * Set path for storage when upload file.
     *
     * @var string
     */
    protected function storageDisk($type)
    {
        if ($type == 'image') {
            return '/'.$this->baseDisk.'/'.$this->imagePath.'/';
        } elseif ($type == 'excel') {
            return '/'.$this->baseDisk.'/'.$this->excelPath.'/';
        } elseif ($type == 'pdf') {
            return '/'.$this->baseDisk.'/'.$this->pdfPath.'/';
        } elseif ($type == 'word') {
            return '/'.$this->baseDisk.'/'.$this->wordPath.'/';
        } elseif ($type == 'qrcode') {
            return '/'.$this->baseDisk.'/'.$this->qrcodePath.'/';
        } else {
            return '/'.$this->baseDisk.'/'.$this->unkownPath.'/';
        }
    }

    /**
     * Save file in storage app
     *
     * @param $file
     * @var void
     */
    protected function putFile($type, $file)
    {
        $user = request()->user();
        $clientCode = $user->id.'_'.$user->created_at->format('dmY');
        $fileName = preg_replace('/\s+/', '_', uniqid().'_'.date('dmY').'_'.$clientCode.'.'.$file->getClientOriginalExtension());

        if ($this->checkFile($type, $fileName)) {
            $this->putFile($type, $file);
        } else {
            $file->storeAs($this->storageDisk($type), $fileName);
            
            return $fileName;
        }
    }

    /**
     * Delete file in storage app
     * 
     * @param $file
     * @var void
     */
    protected function deleteFile($type, $file)
    {
        return Storage::delete($this->storageDisk($type).$file);
    }

    /**
     * Check file in storage app
     * 
     * @param $file
     * @var void
     */
    protected function checkFile($type, $file)
    {
        if (Storage::exists($this->storageDisk($type).$file)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * Save single file to storage app
     * 
     * @param $file
     * @var void
     */
    protected function saveSingleFile($type, $file)
    {
        if (!is_null($file)) {
            return $this->putFile($type, $file);
        }

        return null;
    }

    /**
     * Update old file with the new one
     * 
     * @param $file $old_file
     * @var void
     */
    protected function updateSingleFile($type, $file, $old_file)
    {
        if (!is_null($file)) {
            if ($this->checkFile($type, $old_file)) {
                $this->deleteFile($type, $old_file);
                return $this->updateSingleFile($type, $file, $old_file);
            } else {
                return $this->putFile($type, $file);
            }
        }

        return null;
    }

    /**
     * Save multiple file at once
     * 
     * @param $file
     * @var void
     */
    protected function saveMultipleFile($type, $files)
    {
        $data = [];

        if (!is_null($files)) {
            if (is_array($files)) {
                foreach ($files as $file) {
                    $data[] = $this->putFile($type, $file);
                }
            } else {
                return $this->putFile($type, $files);
            }
        }

        return $data;
    }

    /**
     * Update multiple file at once
     * 
     * @param $file $old_file
     * @var void
     */
    protected function updateMultipleFile($type, $files, $old_file)
    {
        $data = [];

        if (!is_null($files)) {
            if (is_array($files)) {
                foreach ($files as $file) {
                    if ($this->checkFile($type, $old_file)) {
                        $this->deleteFile($type, $old_file);
                        return $this->updateSingleFile($type, $file, $old_file);
                    } else {
                        $data[] = $this->putFile($type, $file);
                    }
                }
            } else {
                return $this->putFile($type, $files);
            }
        }

        return $data;
    }
}