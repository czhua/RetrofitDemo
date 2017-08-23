package chan.com.retrofitdemo.entity;

import org.simpleframework.xml.Element;
import org.simpleframework.xml.Root;

@Root(name = "day")
public class DayEntity {
    @Element(name = "type")
    private String type;

    @Element(name = "fengxiang")
    private String fengxiang;

    @Element(name = "fengli")
    private String fengli;

    @Override
    public String toString() {
        return "DayEntity{" +
                "type='" + type + '\'' +
                ", fengxiang='" + fengxiang + '\'' +
                ", fengli='" + fengli + '\'' +
                '}';
    }
}