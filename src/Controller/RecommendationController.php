namespace App\Controller;

use App\Entity\User;
use App\Entity\Destination;
use App\Entity\Message;
use Doctrine\ORM\EntityManagerInterface;

class RecommendationController extends Controller
{
    private $entityManager;

    public function __construct(EntityManagerInterface $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    public function recommend(User $user)
    {
        // Get the user's preferences
        $preferences = $user->getPreferences();

        // Get the destinations that match the user's preferences
        $destinations = $this->entityManager
            ->getRepository(Destination::class)
            ->findBy(['preferences' => $preferences]);

        // Return the recommended destinations
        return $destinations;
    }
}