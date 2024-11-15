<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create('vi_VN'); // Set Faker locale to Vietnamese

        $titles = [
            'Phở Bò - Tinh túy của Việt Nam',
            'Bún Bò Huế đậm đà miền Trung',
            'Chả Cá Lã Vọng - Đặc sản Hà Nội',
            'Bánh Cuốn Thanh Trì',
            'Bánh Khọt Vũng Tàu thơm lừng',
            'Cơm Tấm Sài Gòn - Vị ngon khó quên',
            'Mì Quảng Đà Nẵng đậm vị',
            'Bánh Bèo Huế - Thanh đạm nhẹ nhàng',
            'Xôi Xéo - Bữa sáng đặc trưng',
            'Cháo Lòng - Món ăn dân dã Việt Nam',
            'Nem Rán Hà Nội - Món ngon ngày Tết',
            'Gỏi Cuốn - Món ăn nhẹ thanh đạm',
            'Bánh Canh Cua - Đậm đà miền Nam',
            'Cà Phê Sữa Đá - Đặc sản Việt Nam',
            'Bún Thịt Nướng - Hương vị miền Nam',
            'Lẩu Mắm Miền Tây - Đậm vị quê hương',
            'Bánh Tráng Trộn - Món ăn vặt hấp dẫn',
            'Bánh Pía Sóc Trăng - Đặc sản Nam Bộ',
            'Ốc Nướng - Món ăn đường phố hấp dẫn',
            'Bánh Chưng - Hương vị Tết truyền thống',
            'Bánh Tét - Đặc sản miền Nam dịp Tết',
            'Bánh Mì Thịt - Món ăn sáng quốc dân',
            'Bánh Bao - Nóng hổi buổi sáng',
            'Chè Ba Màu - Món chè thanh mát',
            'Bánh Đa Cua Hải Phòng - Đậm đà biển cả',
            'Cá Kho Tộ - Hương vị dân dã miền Nam',
            'Thịt Kho Tàu - Đậm đà vị miền Tây',
            'Bánh Gối - Món ăn vặt Hà Nội',
            'Gỏi Ngó Sen - Thanh mát mùa hè',
            'Mắm Ruốc Chấm Rau - Đặc sản miền Trung',
            'Canh Chua Cá Lóc - Vị chua ngọt hài hòa',
            'Bánh Bột Lọc - Món Huế thơm ngon',
            'Bún Riêu Cua - Đặc sản miền Bắc',
            'Lẩu Cá Kèo - Đậm vị miền Tây',
            'Bánh Tằm Bì - Độc đáo miền Tây',
            'Cơm Hến Huế - Đậm vị dân dã',
            'Chả Giò - Giòn tan ngày Tết',
            'Xôi Lạc - Bữa sáng đơn giản',
            'Bánh Chuối Chiên - Món ăn vặt giòn ngọt',
            'Nước Mía - Giải khát ngày hè',
            'Bún Mắm - Hương vị độc đáo miền Tây',
            'Bánh Phu Thê - Tượng trưng tình yêu',
            'Hủ Tiếu Nam Vang - Đặc sản Sài Gòn',
            'Chả Cá Thăng Long - Đặc sản Hà Nội',
            'Xôi Gấc - Màu đỏ may mắn',
            'Sữa Đậu Nành - Thức uống bổ dưỡng',
            'Mì Cay - Thách thức vị giác',
            'Bánh Xèo - Món ăn miền Nam',
            'Lẩu Bò - Món lẩu đậm vị',
            'Bánh Tôm Hồ Tây - Đặc sản Hà Nội',
            'Gà Rán - Hấp dẫn mọi lứa tuổi',
        ];


        $contents = [
            'Phở bò là món ăn nổi tiếng với nước dùng đậm đà, hương thơm ngào ngạt từ quế và hồi, kèm thịt bò mềm.',
            'Bún bò Huế mang đậm vị cay nồng và thơm lừng của sả, nước dùng hầm từ xương bò, thêm chả cua, thịt nạm.',
            'Chả cá Lã Vọng là món đặc sản Hà Nội với cá chiên cùng nghệ, ăn kèm bún, rau thơm và đậu phộng giã nhỏ.',
            'Bánh cuốn Thanh Trì mềm, mịn, ăn cùng chả quế, hành phi giòn tan, hòa quyện với nước mắm chua ngọt.',
            'Bánh khọt Vũng Tàu giòn rụm với tôm tươi, bột chiên vàng ươm, chấm kèm nước mắm pha loãng và rau sống.',
            'Cơm tấm Sài Gòn với sườn nướng thơm lừng, ăn cùng bì, chả trứng và nước mắm chua ngọt, thêm trứng ốp la.',
            'Mì Quảng Đà Nẵng đậm đà, sợi mì dày dai, ăn kèm tôm, thịt heo, đậu phộng, bánh đa và nước dùng đậm vị.',
            'Bánh bèo Huế là món ăn thanh nhẹ, bánh mỏng mềm, thêm tôm cháy, hành phi, chấm mắm chua ngọt pha loãng.',
            'Xôi xéo vàng óng với đỗ xanh nghiền, hành phi giòn, ăn kèm giò lụa hoặc ruốc mặn, bữa sáng đậm đà.',
            'Cháo lòng nóng hổi, gồm lòng non, dồi, ăn kèm quẩy giòn và hành lá thái nhỏ, thêm tiêu và chanh.',
            'Nem rán Hà Nội giòn vàng, bên trong là nhân thịt heo, miến, mộc nhĩ, ăn kèm rau sống và nước chấm chua ngọt.',
            'Gỏi cuốn với tôm, thịt heo, rau sống cuộn trong bánh tráng mềm, chấm cùng nước tương hoặc mắm nêm.',
            'Bánh canh cua là món đậm đà với sợi bánh canh dai, thịt cua thơm, ăn cùng hành phi, tôm và nước lèo ngọt vị.',
            'Cà phê sữa đá Việt Nam với hương vị đậm đà của cà phê robusta, thêm chút sữa đặc béo ngậy.',
            'Bún thịt nướng với thịt nướng thơm phức, ăn cùng bún, rau sống, đậu phộng rang, và nước mắm chua ngọt.',
            'Lẩu mắm miền Tây với nước lẩu từ mắm cá linh, ăn cùng bông điên điển và rau đắng đậm đà hương vị.',
            'Bánh tráng trộn gồm bánh tráng khô, bò khô, trứng cút, rau răm, và nước sốt đậm đà, là món ăn vặt hấp dẫn.',
            'Bánh pía Sóc Trăng thơm ngọt với lớp vỏ mềm, nhân sầu riêng và lòng đỏ trứng muối, là đặc sản Nam Bộ.',
            'Ốc nướng mỡ hành béo ngậy, thêm chút đậu phộng giã nhỏ, ăn kèm muối tiêu chanh đậm đà.',
            'Bánh chưng truyền thống với nhân thịt mỡ, đậu xanh, được gói bằng lá dong, mang hương vị ngày Tết.',
            'Bánh tét là món truyền thống ngày Tết, được gói lá chuối, bên trong là đậu xanh, thịt mỡ, gạo nếp thơm.',
            'Bánh mì thịt với nhân đa dạng, từ thịt nướng, chả lụa, đến rau sống và nước sốt đậm đà.',
            'Bánh bao nóng hổi, lớp vỏ mềm xốp, nhân thịt và trứng cút đậm đà, thích hợp ăn sáng hoặc ăn vặt.',
            'Chè ba màu ngọt mát với thạch xanh, đậu đỏ và đậu trắng, thêm nước cốt dừa béo ngậy.',
            'Bánh đa cua Hải Phòng đậm đà với nước dùng cua, thêm rau muống, giò tai và hành phi thơm lừng.',
            'Cá kho tộ với vị đậm đà từ nước mắm, cá chắc thịt, ăn cùng cơm trắng và dưa leo tươi mát.',
            'Thịt kho tàu thơm béo với trứng, thịt heo mềm ngọt, nấu cùng nước dừa cho vị ngọt đậm đà.',
            'Bánh gối giòn rụm với nhân thịt, miến và nấm mèo, chấm kèm nước mắm chua ngọt.',
            'Gỏi ngó sen thanh mát với tôm, thịt heo và rau sống, thêm chút nước mắm chua ngọt.',
            'Mắm ruốc chấm rau ăn kèm các loại rau rừng, đậm đà và đặc trưng hương vị miền Trung.',
            'Canh chua cá lóc với vị chua thanh, thêm rau ngò om, đậu bắp, cà chua cho vị hài hòa.',
            'Bánh bột lọc Huế dai mềm, nhân tôm thịt, chấm cùng mắm chua ngọt.',
            'Bún riêu cua với nước dùng cua đồng, đậu phụ chiên, và rau sống tươi ngon.',
            'Lẩu cá kèo miền Tây với nước lẩu đậm đà, cá kèo tươi ngon, ăn cùng bông súng, rau đắng.',
            'Bánh tằm bì thơm ngon, với nước cốt dừa béo ngậy, bì trộn thính và mắm nêm độc đáo.',
            'Cơm hến Huế mang hương vị biển, gồm hến, rau sống, bánh tráng chiên giòn, đậm đà dân dã.',
            'Chả giò giòn rụm với nhân thịt, rau củ, ăn kèm bún và nước mắm pha chua ngọt.',
            'Xôi lạc là món ăn sáng đơn giản, hạt xôi dẻo mềm, ăn cùng lạc rang mặn mòi.',
            'Bánh chuối chiên giòn ngọt, lớp vỏ giòn tan, bên trong chuối thơm mềm, là món ăn vặt yêu thích.',
            'Nước mía mát lạnh, giải khát ngày hè, hương vị ngọt thanh tự nhiên.',
            'Bún mắm với nước dùng đậm đà, tôm, cá, thịt heo quay, ăn kèm rau sống.',
            'Bánh phu thê với nhân đậu xanh dừa thơm ngọt, tượng trưng cho tình yêu đôi lứa.',
            'Hủ tiếu Nam Vang với nước dùng trong, thịt bằm, tôm, lòng heo, ăn cùng hẹ và tỏi phi.',
            'Chả cá Thăng Long giòn thơm, chấm mắm tôm, ăn cùng bún và rau thơm.',
            'Xôi gấc đỏ thắm, thêm dừa nạo, đậu xanh, tượng trưng cho may mắn và hạnh phúc.',
            'Sữa đậu nành thanh mát, là thức uống bổ dưỡng buổi sáng.',
            'Mì cay với nước dùng cay nồng, sợi mì dai, ăn kèm xúc xích, thịt bò, và rau.',
            'Bánh xèo giòn rụm với tôm, thịt, giá đỗ, ăn cùng rau sống và nước mắm chua ngọt.',
            'Lẩu bò với thịt bò mềm, thêm bắp chuối, rau má, vị đậm đà cho bữa ăn đông vui.',
            'Bánh tôm Hồ Tây giòn rụm, nhân tôm ngọt thịt, ăn kèm rau sống và nước mắm.',
            'Gà rán giòn tan, lớp da vàng ươm, là món ăn ưa thích của mọi lứa tuổi.',
        ];
        
        for ($i = 0; $i < count($titles); $i++) {
            Post::create([
                'title' => $titles[$i], // Unique title with index
                'content' => $contents[$i],
                'user_id' => $faker->numberBetween(1, 10),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
