<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Portfolio;
use App\Models\Tags;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PortfolioController extends Controller
{
    /**
     * Show portfolio
     */
    public function index() {
        $jobs = Portfolio::paginate(8)->withQueryString();
        $categories = Categories::select('category')->groupBy('category')->get();

        return view('pages.portfolio.index', [
            'categories' => $categories,
            'jobs' => $jobs,
        ]);
    }
    public function show($id)
    {
        $portfolio = Portfolio::where('id', $id)->first();
        $tags = Tags::where('portfolio_id', $id)->get();

        return view('pages.portfolio.details',[
            'portfolio' => $portfolio,
            'tags' => $tags,
        ]);
    }

    /**
     * Form to create a new Portfolio
     */
    public function create()
    {
        $categories = Categories::select('category')->groupBy('category')->get();
        $tags = Tags::select('tag')->groupBy('tag')->get();

        return view('pages.portfolio.create', [
            'categories' => $categories,
            'tags' => $tags,
        ]);
    }

    /**
     * Save a new Portfolio
     */
    public function store(Request $request)
    {
        // upload de imagens
        $cover = $this->file_upload($request->file('cover'), 'covers');
        $imagens = $this->file_upload($request->file('images'), 'project');

        $portfolio = Portfolio::create([
            'title' => $request->title,
            'images' => json_encode($imagens),
            'cover' => $cover,
            'descrition' => $request->descrition,
            'category' => $request->category,
            'client' => $request->client,
        ]);

        $portfolio_id = $portfolio->id;

        if ($request->tags != null) {
            foreach ($request->tags as $tag) {
                Tags::create([
                    'tag' => $tag,
                    'portfolio_id' => $portfolio_id,
                ]);
            }
        }

        if ($request->category != null) {
            Categories::create([
                'category' => $request->category,
                'portfolio_id' => $portfolio_id,
            ]);
        }

        return redirect()->route('home')->with('sucess', 'Create a new Portfolio item with successfull!');
    }

    /**
     * Form to Edit Portfolio
     */
    public function edit($id)
    {
        $portfolio = Portfolio::where('id', $id)->first();

        $portfolioTags = Tags::select('tag')
        ->where('portfolio_id', $id)
        ->groupBy('tag')
        ->get();

        $allTags = Tags::select('tag')
        ->groupBy('tag')
        ->get();

        // $portfolioTagsToArray = $portfolioTags->toArray();
        // $allTagsToArray = $allTags->toArray();

        // $result = array_filter($allTagsToArray, function($tag) use($portfolioTagsToArray) {
        //     if ( in_array($tag, $portfolioTagsToArray ) ) {
        //         $item = ['tag' => '_'.$tag['tag']];
        //     }else {
        //         $item = ['tag' => $tag['tag']];
        //     }
        //     return $item;
        // });
        // dd($result);

        $newArrayTags = [];

        // Passa por todas as tegs cadstradas
        foreach ($allTags as $tags) {

            // passa pelas tegues do portfolio a ser editado
            foreach ($portfolioTags as $tag) {

                // filtra as tags selecionadas do portfolio
                if ($tags->tag == $tag->tag) {
                    array_push($newArrayTags, '_'.$tag->tag);
                }
            }
            array_push($newArrayTags, $tags->tag);
        }

        $portfolioCategory = Categories::where('portfolio_id', $id)->first();
        $categories = Categories::select('category')->groupBy('category')->get();

        return view('pages.portfolio.edit',[
            'portfolio' => $portfolio,
            'portfolioTags' => $portfolioTags,
            'allTags' => collect($newArrayTags),
            'portfolioCategory' => $portfolioCategory,
            'categories' => $categories,
        ]);
    }

    /**
     * Update a Portfolio
     */
    public function update(Request $request, $id)
    {
        $data = $request->all();

        $this->file_upload($request->file('images'), 'project');
        $this->file_upload($request->file('cover'), 'covers');

        Portfolio::find($id)->update($data);

        if ($request->tags != null) {
            foreach ($request->tags as $tag) {
                Tags::where('portfolio_id', $id)
                ->update([
                    'tag' => $tag,
                ]);
            }
        }

        if ($request->category != null) {
            Categories::where('portfolio_id', $id)
            ->update([
                'category' => $request->category,
            ]);
        }

        return redirect(route('portfolio.show', ['id' => $id]));

    }

    /**
     * Delete a Portfoplio
     */
    public function delete($id)
    {
        Portfolio::find($id)->delete();

        return redirect(route('portfolio.index'));
    }

    public function file_upload($input, $dirName, $extensions=['jpg', 'jpeg', 'gif', 'webp', 'png']) {
        if($input) {

            $allowedfileExtension= $extensions;
            $files = $input;

            if (gettype($files) == "array") {
                foreach($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $extension = $file->getClientOriginalExtension();

                    $check = in_array($extension, $allowedfileExtension);

                    if($check) {
                        $ImagesToUpload = [];

                        foreach ($input as $image) {

                            // upload to storage/public
                            $filename = $image->store('images/'.$dirName, 'public');

                            array_push($ImagesToUpload, 'storage/'.$filename);

                        }

                        // echo "Upload Successfully";
                        return $ImagesToUpload;

                    } else {
                        return redirect()->back()->with('error', 'File type not supported!')->withInput();
                    }
                }
            } else {
                $filename = $input->getClientOriginalName();
                $extension = $input->getClientOriginalExtension();

                $check = in_array($extension, $allowedfileExtension);

                if($check) {
                    // upload to storage/public
                    return $filename = $input->store('images/'.$dirName, 'public');
                } else {
                    return redirect()->back()->with('error', 'File type not supported!')->withInput();
                }
            }
        }
    }
}
