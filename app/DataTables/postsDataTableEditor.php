<?php

namespace App\DataTables;

use App\Models\post;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Validation\Rule;
use Illuminate\Validation\ValidationException;
use Yajra\DataTables\DataTablesEditor;


class postsDataTableEditor extends DataTablesEditor
{
//    protected $actions = ['create', 'edit', 'remove', 'upload'];
//
//    protected $uploadDir = '/upload';

    protected $model = post::class;

    /**
     * Get create action validation rules.
     *
     * @return array
     */
    public function createRules()
    {
        return [
//            'userId' => 'required|:' . $this->resolveModel()->getTable(),
//            'title'  => 'required',
//            'image' => 'required',
//            'description' => 'required',
        ];
    }

    /**
     * Get edit action validation rules.
     *
     * @param Model $model
     * @return array
     */
    public function editRules(Model $model)
    {
        return [
//            'userId' => 'sometimes|required|',
//            'title'  => 'sometimes|required',
//
        ];
    }

    /**
     * Get remove action validation rules.
     *
     * @param Model $model
     * @return array
     */
    public function removeRules(Model $model)
    {
        return [];
    }
//    public function upload(Request $request)
//    {
//        $field   = $request->input('uploadField');
//        $storage = Storage::disk($this->disk);
//
//        try {
//            $rules      = $this->uploadRules();
//            $fieldRules = ['upload' => $rules[$field] ?? []];
//
//            $this->validate($request, $fieldRules, $this->messages(), $this->attributes());
//            $file=$request->file('upload');
//            $uploadedFile = $file;
//            $filename     = $this->getUploadedFilename($field, $uploadedFile);
//            $id           = $storage->putFileAs($this->uploadDir, $uploadedFile, $filename);
//
//            if (method_exists($this, 'uploaded')) {
//                $id = $this->uploaded($id);
//            }
//
//            return response()->json([
//                'action' => $this->action,
//                'data'   => [],
//                'files'  => [
//                    'files' => [
//                        $id => [
//                            'filename'      => $id,
//                            'original_name' => $uploadedFile->getClientOriginalName(),
//                            'size'          => $uploadedFile->getSize(),
//                            'directory'     => $this->uploadDir,
//                            'disk'          => $this->disk,
//                            'url'           => $storage->url($id),
//                        ],
//                    ],
//                ],
//                'upload' => [
//                    'id' => $id,
//                ],
//            ]);
//        } catch (ValidationException $exception) {
//            return response()->json([
//                'action'      => $this->action,
//                'data'        => [],
//                'fieldErrors' => [
//                    [
//                        'name'   => $field,
//                        'status' => str_replace('upload', $field, $exception->errors()['upload'][0]),
//                    ],
//                ],
//            ]);
//        }
//    }

}
