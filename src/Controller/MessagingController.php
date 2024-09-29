namespace App\Controller;

use App\Entity\Message;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MessagingController extends Controller
{
    public function send(Request $request)
    {
        // Get the user's message
        $message = $request->get('message');

        // Create a new message entity
        $messageEntity = new Message();
        $messageEntity->setMessage($message);

        // Save the message to the database
        $this->entityManager->persist($messageEntity);
        $this->entityManager->flush();

        // Return a response to the user
        return new Response('Your message has been sent');
    }
}