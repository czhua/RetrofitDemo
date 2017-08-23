package chan.com.retrofitdemo.entity.work;

import org.simpleframework.xml.Attribute;
import org.simpleframework.xml.Element;
import org.simpleframework.xml.Root;

/**
 * Created by zehua_chen on 2017/8/23.
 */
@Root
public class ItemEntity {

    @Attribute(name = "name")
    private String name;
    @Attribute
    private int item_id;
    @Attribute
    private String type;
    @Attribute
    private String url_video;
    @Attribute
    private String url_video_img;
    @Attribute
    private String url_img;
    @Attribute
    private int credit;

    public String getName() {
        return name;
    }

    public void setName(String name) {
        this.name = name;
    }

    public int getItem_id() {
        return item_id;
    }

    public void setItem_id(int item_id) {
        this.item_id = item_id;
    }

    public String getType() {
        return type;
    }

    public void setType(String type) {
        this.type = type;
    }

    public String getUrl_video() {
        return url_video;
    }

    public void setUrl_video(String url_video) {
        this.url_video = url_video;
    }

    public String getUrl_video_img() {
        return url_video_img;
    }

    public void setUrl_video_img(String url_video_img) {
        this.url_video_img = url_video_img;
    }

    public String getUrl_img() {
        return url_img;
    }

    public void setUrl_img(String url_img) {
        this.url_img = url_img;
    }

    public int getCredit() {
        return credit;
    }

    public void setCredit(int credit) {
        this.credit = credit;
    }

    @Override
    public String toString() {
        return "ItemEntity{" +
                "name='" + name + '\'' +
                ", item_id=" + item_id +
                ", type='" + type + '\'' +
                ", url_video='" + url_video + '\'' +
                ", url_video_img='" + url_video_img + '\'' +
                ", url_img='" + url_img + '\'' +
                ", credit=" + credit +
                '}';
    }
}
