namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            return response()->json([
                'message' => 'Login efetuado com sucesso',
                'user' => $user,
                'token' => $user->createToken('authToken')->plainTextToken,
            ]);
        }

        return response()->json(['message' => 'Credenciais inválidas'], 401);
    }
}
