namespace App\Controller;

use App\Entity\User;
use App\Entity\Destination;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class ApiController extends Controller
{
    public function getRecommendations(Request $request)
    {
        // Get the user's ID from the request
        $userId = $request->get('user_id');

        // Get the user's preferences
        $user = $this->entityManager
            ->getRepository(User::class)
            ->findOneBy(['id' => $userId]);

        // Get the recommended destinations
        $destinations = $this->recommendationController->recommend($user);

        // Return the recommended destinations as JSON
        return new Response(json_encode($destinations));
    }
}