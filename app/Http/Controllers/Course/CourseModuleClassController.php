<?php

namespace App\Http\Controllers\Course;

use App\Http\Controllers\Controller;
use App\Models\Course\CourseCategory;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\ContactMessage;
use App\Models\Course\CourseModuleClasses;

class CourseModuleClassController extends Controller
{
    public function all()
    {
        $paginate = (int) request()->paginate ?? 10;
        $orderBy = request()->orderBy ?? 'id';
        $orderByType = request()->orderByType ?? 'ASC';

        $status = 1;
        if (request()->has('status')) {
            $status = request()->status;
        }

        $query = CourseModuleClasses::where('status', $status)->orderBy($orderBy, $orderByType);

        if (request()->has('search_key')) {
            $key = request()->search_key;
            $query->where(function ($q) use ($key) {
                return $q->where('id', '%' . $key . '%')
                    ->orWhere('course_id', '%' . $key . '%')
                    ->orWhere('course_modules_id', '%' . $key . '%')
                    ->orWhere('class_no', '%' . $key . '%')
                    ->orWhere('title', '%' . $key . '%')
                    ->orWhere('type', 'LIKE', '%' . $key . '%')
                    ->orWhere('class_vedio_link', 'LIKE', '%' . $key . '%')
                    ->orWhere('class_vedio_poster', 'LIKE', '%' . $key . '%');
            });
        }

        $datas = $query->paginate($paginate);
        return response()->json($datas);
    }

    public function show($id)
    {

        $select = "*";
        if (request()->has('select_all') && request()->select_all) {
            $select = "*";
        }
        $data = CourseModuleClasses::where('id', $id)
            ->select($select)
            ->first();
        if ($data) {
            return response()->json($data, 200);
        } else {
            return response()->json([
                'err_message' => 'data not found',
                'errors' => [
                    'user' => [],
                ],
            ], 404);
        }
    }
    public function store()
    {
        $validator = Validator::make(request()->all(), [
            'course_id' => ['required'],
            'course_modules_id' => ['required'],
            'class_no' => ['required'],
            'title' => ['required'],
            'type' => ['required'],
            'class_vedio_link' => ['required'],
            'class_vedio_poster' => ['required'],

        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = new CourseModuleClasses();
        $data->course_id = request()->course_id;
        $data->course_modules_id = request()->course_modules_id;
        $data->class_no = request()->class_no;
        $data->title = request()->title;
        $data->type = request()->type;
        $data->class_vedio_link = request()->class_vedio_link;
        $data->class_vedio_poster = request()->class_vedio_poster;
        $data->save();

        return response()->json($data, 200);
    }

    public function canvas_store()
    {
        $validator = Validator::make(request()->all(), [
            'course_id' => ['required'],
            'course_modules_id' => ['required'],
            'class_no' => ['required'],
            'title' => ['required'],
            'type' => ['required'],
            'class_vedio_link' => ['required'],
            'class_vedio_poster' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = new CourseModuleClasses();
        $data->course_id = request()->course_id;
        $data->course_modules_id = request()->course_modules_id;
        $data->class_no = request()->class_no;
        $data->title = request()->title;
        $data->type = request()->type;
        $data->class_vedio_link = request()->class_vedio_link;
        $data->class_vedio_poster = request()->class_vedio_poster;
        $data->save();

        return response()->json($data, 200);
    }

    public function update()
    {
        $data = CourseModuleClasses::find(request()->id);
        if(!$data){
            return response()->json([
                'err_message' => 'validation error',
                'errors' => ['name'=>['user_role not found by given id '.(request()->id?request()->id:'null')]],
            ], 422);
        }

        $validator = Validator::make(request()->all(), [
            'course_id' => ['required'],
            'course_modules_id' => ['required'],
            'class_no' => ['required'],
            'title' => ['required'],
            'type' => ['required'],
            'class_vedio_link' => ['required'],
            'class_vedio_poster' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data->course_id = request()->course_id;
        $data->course_modules_id = request()->course_modules_id;
        $data->class_no = request()->class_no;
        $data->title = request()->title;
        $data->type = request()->type;
        $data->class_vedio_link = request()->class_vedio_link;
        $data->class_vedio_poster = request()->class_vedio_poster;
        $data->save();

        return response()->json($data, 200);
    }

    public function canvas_update()
    {
        $data = CourseModuleClasses::find(request()->id);
        if(!$data){
            return response()->json([
                'err_message' => 'validation error',
                'errors' => ['name'=>['user_role not found by given id '.(request()->id?request()->id:'null')]],
            ], 422);
        }

        $validator = Validator::make(request()->all(), [
            'course_id' => ['required'],
            'course_modules_id' => ['required'],
            'class_no' => ['required'],
            'title' => ['required'],
            'type' => ['required'],
            'class_vedio_link' => ['required'],
            'class_vedio_poster' => ['required'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }
        $data->course_id = request()->course_id;
        $data->course_modules_id = request()->course_modules_id;
        $data->class_no = request()->class_no;
        $data->title = request()->title;
        $data->type = request()->type;
        $data->class_vedio_link = request()->class_vedio_link;
        $data->class_vedio_poster = request()->class_vedio_poster;
        $data->save();

        return response()->json($data, 200);
    }

    public function soft_delete()
    {
        $validator = Validator::make(request()->all(), [
            'id' => ['required','exists:course_module_classes,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = CourseModuleClasses::find(request()->id);
        $data->status = 'inactive';
        $data->save();

        return response()->json([
                'result' => 'deactivated',
        ], 200);
    }

    public function destroy()
    {
        $validator = Validator::make(request()->all(), [
            'id' => ['required','exists:course_module_classes,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = CourseModuleClasses::find(request()->id);
        $data->delete();

        return response()->json([
                'result' => 'deleted',
        ], 200);
    }

    public function restore()
    {
        $validator = Validator::make(request()->all(), [
            'id' => ['required','exists:contact_messages,id'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        $data = CourseModuleClasses::find(request()->id);
        $data->status = 1;
        $data->save();

        return response()->json([
                'result' => 'activated',
        ], 200);
    }

    public function bulk_import()
    {
        $validator = Validator::make(request()->all(), [
            'data' => ['required','array'],
        ]);

        if ($validator->fails()) {
            return response()->json([
                'err_message' => 'validation error',
                'errors' => $validator->errors(),
            ], 422);
        }

        foreach (request()->data as $item) {
            $item['created_at'] = $item['created_at'] ? Carbon::parse($item['created_at']): Carbon::now()->toDateTimeString();
            $item['updated_at'] = $item['updated_at'] ? Carbon::parse($item['updated_at']): Carbon::now()->toDateTimeString();
            $item = (object) $item;
            $check = CourseModuleClasses::where('id',$item->id)->first();
            if(!$check){
                try {
                    CourseModuleClasses::create((array) $item);
                } catch (\Throwable $th) {
                    return response()->json([
                        'err_message' => 'validation error',
                        'errors' => $th->getMessage(),
                    ], 400);
                }
            }
        }

        return response()->json('success', 200);
    }
}
