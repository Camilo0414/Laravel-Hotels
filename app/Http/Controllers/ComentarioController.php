<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComentarioRequest;
use App\Http\Requests\UpdateComentarioRequest;
use App\Repositories\ComentarioRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use App\Models\Hotel;
use App\User;

use Flash;
use Prettus\Repository\Criteria\RequestCriteria;
use Response;

class ComentarioController extends AppBaseController
{
    /** @var  ComentarioRepository */
    private $comentarioRepository;

    public function __construct(ComentarioRepository $comentarioRepo)
    {
        $this->comentarioRepository = $comentarioRepo;
    }

    /**
     * Display a listing of the Comentario.
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $this->comentarioRepository->pushCriteria(new RequestCriteria($request));
        $comentarios = $this->comentarioRepository->all();

        return view('comentarios.index')
            ->with('comentarios', $comentarios);
    }

    /**
     * Show the form for creating a new Comentario.
     *
     * @return Response
     */
    public function create()
    {
        $hoteles=Hotel::pluck('nombre','id');
        $usuarios=User::pluck('name','id');
        return view('comentarios.create',compact('hoteles','usuarios'));
    }

    /**
     * Store a newly created Comentario in storage.
     *
     * @param CreateComentarioRequest $request
     *
     * @return Response
     */
    public function store(CreateComentarioRequest $request)
    {
        $input = $request->all();

        $comentario = $this->comentarioRepository->create($input);

        Flash::success('Comentario saved successfully.');

        return redirect(route('hotels.show',[$request->hotel_id]));
    }

    /**
     * Display the specified Comentario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comentario = $this->comentarioRepository->findWithoutFail($id);

        if (empty($comentario)) {
            Flash::error('Comentario not found');

            return redirect(route('comentarios.index'));
        }

        return view('comentarios.show')->with('comentario', $comentario);
    }

    /**
     * Show the form for editing the specified Comentario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comentario = $this->comentarioRepository->findWithoutFail($id);

        if (empty($comentario)) {
            Flash::error('Comentario not found');

            return redirect(route('comentarios.index'));
        }

        return view('comentarios.edit')->with('comentario', $comentario);
    }

    /**
     * Update the specified Comentario in storage.
     *
     * @param  int              $id
     * @param UpdateComentarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComentarioRequest $request)
    {
        $comentario = $this->comentarioRepository->findWithoutFail($id);

        if (empty($comentario)) {
            Flash::error('Comentario not found');

            return redirect(route('comentarios.index'));
        }

        $comentario = $this->comentarioRepository->update($request->all(), $id);

        Flash::success('Comentario updated successfully.');

        return redirect(route('comentarios.index'));
    }

    /**
     * Remove the specified Comentario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comentario = $this->comentarioRepository->findWithoutFail($id);

        if (empty($comentario)) {
            Flash::error('Comentario not found');

            return redirect(route('comentarios.index'));
        }

        $this->comentarioRepository->delete($id);

        Flash::success('Comentario deleted successfully.');

        return redirect(route('comentarios.index'));
    }
}
