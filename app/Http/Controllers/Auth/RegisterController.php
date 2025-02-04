<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\User;

class RegisteredUserController extends Controller
{

    protected function create(array $data)
{
    return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password']),
        'role' => $data['role'],
    ]);
}

    public function store(Request $request)
    {
        // Validação do formulário
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'document' => ['required', 'file', 'mimes:jpg,jpeg,png,pdf', 'max:2048'], // Permite JPG, JPEG, PNG, PDF e máximo de 2MB
        ]);

        // Armazenar o documento
        if ($request->hasFile('document')) {
            $path = $request->file('document')->store('documents', 'public');
        }

        // Criar o usuário
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'document_path' => $path ?? null,  // Salva o caminho do arquivo no banco
        ]);

        // Logar o usuário imediatamente
        auth()->login($user);

        return redirect()->route('home');
    }
}
